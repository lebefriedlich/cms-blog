<?php

class kategori extends Controller
{
    public function index($halaman = 1)
    {
        if (isset($_SESSION['login'])) {
            $data['judul'] = 'Kategori Wonderful Pasuruan';
            $data['admin'] = $_SESSION['admin'];
            $data['kategoris'] = $this->model('kategori_model')->loadKategori($halaman);
            $data['pagination'] = $this->model('kategori_model')->pagination();
            $data['currentPage'] = $halaman;
            $data['prevPage'] = ($halaman > 1) ?  $halaman - 1 : 1;
            $data['nextPage'] = ($halaman > $data['pagination']) ?  $halaman + 1 : $data['pagination'];
            $this->view('templates/header', $data);
            $this->view('dashboard/kategori/index', $data);
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

    public function delete($id_kategori)
    {
        if ($this->model('kategori_model')->delete($id_kategori) > 0) {
            Flasher::setFlash('Kamu berhasil ', 'menghapus kategori', 'success');
        } else {
            Flasher::setFlash('Kamu gagal ', 'menghapus kategori', 'danger');
        }
        header('Location: ' . BASEURL . '/kategori');
        exit;
    }
}
