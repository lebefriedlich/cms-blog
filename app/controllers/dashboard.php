<?php
class dashboard extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            $data['judul'] = 'Dashboard';
            $data['admin'] = $_SESSION['admin'];
            $data['jumlahPenulis'] = $this->model('dashboard_model')->jumlahPenulis();
            $data['jumlahKategori'] = $this->model('dashboard_model')->jumlahKategori();
            $data['jumlahArtikel'] = $this->model('dashboard_model')->jumlahArtikel();
            $this->view('templates/header', $data);
            $this->view('dashboard/index', $data);
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
