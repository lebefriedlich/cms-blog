<?php
class login extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['login'])) {
            $data['judul'] = 'Wonderful Pasuruan - Login';
            $this->view('templates/header', $data);
            $this->view('login/index');
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

    public function login()
    {
        if (isset($_POST['login'])) {
            $loginResult = $this->model('authentication_model')->login($_POST);

            if ($loginResult > 0) {
                $_SESSION['login'] = true;
                $_SESSION['admin'] = $loginResult;
                header('Location: ' . BASEURL . '/dashboard');
            } else {
                Flasher::setFlash('Email atau password anda salah. ', 'Silahkan Coba lagi', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;
            }
        }
    }
}
