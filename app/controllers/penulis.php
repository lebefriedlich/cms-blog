<?php
class penulis extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            $data['judul'] = 'Penulis';
            $data['penuliss'] = $this->model('penulis_model')->loadPenulis();
            $this->view('templates/header', $data);
            $this->view('penulis/index', $data);
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
            if ($_POST['password'] === $_POST['passwordLama']) {
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
            Flasher::setFlash('You have successfully ', 'delete', 'success');
        } else {
            Flasher::setFlash('You failed to ', 'delete', 'danger');
        }
        header('Location: ' . BASEURL . '/penulis');
        exit;
    }
}
