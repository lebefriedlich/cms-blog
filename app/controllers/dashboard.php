<?php
class dashboard extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            $data['judul'] = 'Dashboard';
            $this->view('templates/header', $data);
            $this->view('dashboard/index');
        } else {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function logout()
    {
        if (isset($_SESSION['login'])) {
            session_destroy();
            header('Location: ' . BASEURL . '/login');
            exit();
        }
    }
}
