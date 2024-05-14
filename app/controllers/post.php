<?php
class post extends Controller
{
    public function index($slug)
    {
        $artikel = $this->model('post_model')->show($slug);
        $data['judul'] = $artikel['judul'] . " - Wonderful Pasuruan";
        $data['artikel'] = $artikel;
        if ($this->model('post_model')->updatePengunjung($artikel['id_artikel'])){
            $this->view('templates/header', $data);
            $this->view('post/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }
}
