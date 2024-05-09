<?php
class home extends Controller
{
    public function index($halaman = 1)
    {
        $data['judul'] = 'Blog Home';
        $data['article'] = $this->model('home_model')->article($halaman);
        if (isset($_SESSION['login'])) {
            $data['user'] = $_SESSION['user'];
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header', $data);
            $this->view('home/index', $data);
            $this->view('templates/footer');
        }
    }
}
