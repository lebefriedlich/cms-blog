<?php
class penulis extends Controller
{
    public function index($halaman = 1)
    {
        if (isset($_SESSION['login'])) {
            $data['judul'] = 'Penulis Wonderful Pasuruan';
            $data['admin'] = $_SESSION['admin'];
            $data['penuliss'] = $this->model('penulis_model')->loadPenulis($halaman);
            $data['pagination'] = $this->model('penulis_model')->pagination();
            $data['currentPage'] = $halaman;
            $data['prevPage'] = ($halaman > 1) ?  $halaman - 1 : 1;
            $data['nextPage'] = ($halaman > $data['pagination']) ?  $halaman + 1 : $data['pagination'];
            $this->view('templates/header', $data);
            $this->view('dashboard/penulis/index', $data);
        } else {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function add()
    {
        if (isset($_POST['add'])) {

            $emails = $this->model('penulis_model')->checkEmail($_POST['email']);
            if ($emails) {
                Flasher::setFlash('Email sudah terdaftar ', '', 'danger');
                header('Location: ' . BASEURL . '/penulis');
                exit;
            }

            if ($this->model('penulis_model')->add($_POST) > 0) {
                Flasher::setFlash('Kamu berhasil ', 'menambahkan penulis', 'success');
            } else {
                Flasher::setFlash('Kamu gagal ', 'menambahkan penulis', 'danger');
            }

            header('Location: ' . BASEURL . '/penulis');
            exit;
        }
    }

    public function edit($id_penulis)
    {
        if (isset($_POST['edit'])) {
            if (empty($_POST['password'])) {
                unset($_POST['password']);
            }

            if ($this->model('penulis_model')->edit($_POST, $id_penulis) > 0) {
                Flasher::setFlash('Kamu berhasil ', 'mengedit penulis', 'success');
            } else {
                Flasher::setFlash('Kamu gagal ', 'mengedit penulis', 'danger');
            }

            header('Location: ' . BASEURL . '/penulis');
            exit;
        }
    }

    public function delete($id_penulis)
    {
        if ($this->model('penulis_model')->delete($id_penulis) > 0) {
            Flasher::setFlash('Kamu berhasil ', 'menghapus penulis', 'success');
        } else {
            Flasher::setFlash('Kamu gagal ', 'menghapus penulis', 'danger');
        }
        header('Location: ' . BASEURL . '/penulis');
        exit;
    }
}
