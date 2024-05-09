<?php

class kategori extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            $data['judul'] = 'Kategori';
            $data['kategoris'] = $this->model('kategori_model')->loadKategori();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
        } else {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function add()
    {
        if (isset($_POST['add'])) {
            if ($this->model('kategori_model')->add($_POST) > 0) {
                Flasher::setFlash('Kamu berhasil ', 'menambahkan kategori', 'success');
            } else {
                Flasher::setFlash('Kamu gagal ', 'menambahkan kategori', 'danger');
            }

            header('Location: ' . BASEURL . '/kategori');
            exit;
        }
    }

    public function edit($id_kategori)
    {
        if (isset($_POST['edit'])) {
            if ($this->model('kategori_model')->edit($_POST, $id_kategori) > 0) {
                Flasher::setFlash('Kamu berhasil ', 'mengedit kategori', 'success');
            } else {
                Flasher::setFlash('Kamu gagal ', 'mengedit kategori', 'danger');
            }
        
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }
    }
}
