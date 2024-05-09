<?php
class post extends Controller
{
    public function index($slug)
    {
        $article = $this->model('post_model')->show($slug);
        $data['judul'] = $article['judul'];
        $data['article'] = $article;
        if (isset($_SESSION['login'])) {
            $data['user'] = $_SESSION['user'];
            $this->view('templates/header', $data);
            $this->view('post/index', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header', $data);
            $this->view('post/index', $data);
            $this->view('templates/footer');
        }
    }
}