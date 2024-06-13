<?php
class home extends Controller
{
    public function index($halaman = 1)
    {
        $data['judul'] = 'Wonderful Pasuruan';
        if ($halaman == 1) {
            $data['artikelUtama'] = $this->model('home_model')->artikelUtama();
            $data['potongArtikel'] = $this->potongArtikel($data['artikelUtama']['isi'], 300);
        }
        $data['article'] = $this->model('home_model')->artikel($halaman);
        $data['pagination'] = $this->model('home_model')->pagination();
        $data['currentPage'] = $halaman;
        $data['prevPage'] = ($halaman > 1) ?  $halaman - 1 : 1;
        $data['nextPage'] = ($halaman > $data['pagination']) ?  $halaman + 1 : $data['pagination'];
        $data['kategoris'] = $this->model('home_model')->loadKategori();
        $data['artikelPopuler'] = $this->model('home_model')->artikelPopuler();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function kategori($slug, $halaman = 1)
    {
        $data['judul'] = 'Blog Home - Kategori';
        $data['article'] = $this->model('home_model')->filterKategori($slug, $halaman);
        $data['pagination'] = $this->model('home_model')->paginationKategori($slug);
        $data['slug'] = $slug;
        $data['currentPage'] = $halaman;
        $data['prevPage'] = ($halaman > 1) ?  $halaman - 1 : 1;
        $data['nextPage'] = ($halaman > $data['pagination']) ?  $halaman + 1 : $data['pagination'];
        $data['kategori'] = $this->model('home_model')->findKategori($slug);
        $this->view('templates/header', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }

    function potongArtikel($isiArtikel, $jmlhKarakter){
        if (strlen($isiArtikel) <= $jmlhKarakter) {
            return $isiArtikel;
        }
        
        while ($jmlhKarakter > 0 && $isiArtikel[$jmlhKarakter] != " ") {
            --$jmlhKarakter;
        }
        
        if ($jmlhKarakter == 0) {
            $potonganIsiArtikel = substr($isiArtikel, 0, $jmlhKarakter);
        } else {
            $potonganIsiArtikel = substr($isiArtikel, 0, $jmlhKarakter);
        }
        
        $isiArtikelTerpotong = $potonganIsiArtikel . " ...";
        return $isiArtikelTerpotong;
    }
}
