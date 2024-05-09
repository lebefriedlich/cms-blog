<?php
class artikel extends Controller
{
    public function index($halaman = 1)
    {
        if (isset($_SESSION['login'])) {
            $data['judul'] = 'Artikel Saya';
            $data['admin'] = $_SESSION['admin'];
            $data['artikels'] = $this->model('artikel_model')->loadArtikel($halaman);
            $data['pagination'] = $this->model('artikel_model')->pagination();
            $data['currentPage'] = $halaman;
            $data['prevPage'] = ($halaman > 1) ?  $halaman - 1 : 1;
            $data['nextPage'] = ($halaman > $data['pagination']) ?  $halaman + 1 : $data['pagination'];
            $data['kategoris'] = $this->model('kategori_model')->loadKategori();
            $data['penuliss'] = $this->model('penulis_model')->loadPenulis();
            $this->view('templates/header', $data);
            $this->view('artikel/index', $data);
        } else {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    function tanggal_indonesia()
    {
        $nama_hari = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');

        $nama_bulan = array(
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );

        $hari = date('w');

        $tanggal = date('d');
        $bulan = date('n');
        $tahun = date('Y');

        $tanggal_indonesia = $nama_hari[$hari] . ', ' . $tanggal . ' ' . $nama_bulan[$bulan - 1] . ' ' . $tahun;

        return $tanggal_indonesia;
    }

    public function add()
    {
        if (isset($_POST['add'])) {
            $allowed_mime_types = array("image/jpeg", "image/png");

            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];

            $nama_file_baru = $_POST['slug'];
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $file_name_baru = $nama_file_baru . '.' . $file_extension;

            $_POST['image'] = $file_name_baru;
            $target_directory = $_SERVER['DOCUMENT_ROOT'] . "/cms-blog/app/assets/artikel/";
            $target_path = $target_directory . basename($file_name_baru);

            if (in_array($file_type, $allowed_mime_types)) {
                $_POST['hari_tanggal'] = $this->tanggal_indonesia();
                $resultInsertArticle = $this->model('artikel_model')->add($_POST);
                if (move_uploaded_file($file_tmp, $target_path) && $resultInsertArticle > 0) {
                    Flasher::setFlash('Kamu berhasil ', 'menambahkan artikel', 'success');
                } else {
                    Flasher::setFlash('Kamu gagal ', 'menambahkan artikel', 'danger');
                }
            } else {
                Flasher::setFlash('', 'File yang diunggah bukan file gambar. JPEG / PNG', 'danger');
            }

            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }

    public function edit($id_artikel, $id_kontributor)
    {
        if (isset($_POST['edit'])) {
            $_POST['id_artikel'] = $id_artikel;
            $_POST['id_kontributor'] = $id_kontributor;

            if (!empty($_FILES['image']['name'])) {
                $file_path = $_SERVER['DOCUMENT_ROOT'] . "/cms-blog/app/assets/artikel/" . $_POST['image-lawas'];
                if (file_exists($file_path) && unlink($file_path)) {
                    $allowed_mime_types = array("image/jpeg", "image/png");

                    $file_name = $_FILES['image']['name'];
                    $file_tmp = $_FILES['image']['tmp_name'];
                    $file_type = $_FILES['image']['type'];

                    $nama_file_baru = $_POST['slug'];
                    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                    $file_name_baru = $nama_file_baru . '.' . $file_extension;

                    $_POST['image'] = $file_name_baru;
                    $target_directory = $_SERVER['DOCUMENT_ROOT'] . "/cms-blog/app/assets/artikel/";
                    $target_path = $target_directory . basename($file_name_baru);

                    if (in_array($file_type, $allowed_mime_types)) {
                        $editResult = $this->model('artikel_model')->edit($_POST);
                        if (move_uploaded_file($file_tmp, $target_path) && $editResult > 0) {
                            Flasher::setFlash('Kamu berhasil ', 'mengedit artikel', 'success');
                        } else {
                            Flasher::setFlash('Kamu gagal ', 'mengedit artikel', 'danger');
                        }
                    } else {
                        Flasher::setFlash('', 'File yang diunggah bukan file gambar. JPEG / PNG', 'danger');
                    }
                }
            } else {
                $file_path = $_SERVER['DOCUMENT_ROOT'] . "/cms-blog/app/assets/artikel/";
                $old_file_extension = pathinfo($_POST['image-lawas'], PATHINFO_EXTENSION);
                $new_file_name = $_POST['slug'] . '.' . $old_file_extension;
                $old_file_path = $file_path . $_POST['image-lawas'];
                $new_file_path = $file_path . $new_file_name;
                
                if (file_exists($old_file_path)) {
                    if (rename($old_file_path, $new_file_path)) {
                        $_POST['image'] = $new_file_name;
                        $editResult = $this->model('artikel_model')->edit($_POST);
                        if ($editResult > 0) {
                            Flasher::setFlash('Kamu berhasil ', 'mengedit artikel', 'success');
                        } else {
                            Flasher::setFlash('Kamu gagal ', 'mengedit artikel', 'danger');
                        }
                    }
                }
            }
            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }

    public function delete($id_artikel, $id_kontributor, $gambar)
    {
        $file_path = $_SERVER['DOCUMENT_ROOT'] . "/cms-blog/app/assets/artikel/" . $gambar;
        if (file_exists($file_path) && unlink($file_path)) {
            if ($this->model('artikel_model')->delete($id_artikel, $id_kontributor) > 0) {
                Flasher::setFlash('Kamu berhasil ', 'menghapus artikel', 'success');
            } else {
                Flasher::setFlash('Kamu Gagal ', 'menghapus artikel', 'danger');
            }

            header('Location: ' . BASEURL . '/artikel');
            exit;
        }
    }
}
