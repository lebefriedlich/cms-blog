<?php

class home_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function artikelUtama()
    {
        $query = "SELECT * FROM artikel
        ORDER BY id_artikel DESC
        LIMIT 0, 1";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function artikel($halaman)
    {
        $jumlahDataPerHalaman = 4;
        $awalData = (($jumlahDataPerHalaman * $halaman) - $jumlahDataPerHalaman) + 1;
        $query = "SELECT *
        FROM artikel
        ORDER BY id_artikel DESC
        LIMIT $awalData, $jumlahDataPerHalaman";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function pagination()
    {
        $jumlahDataPerHalaman = 4;
        $this->db->query("SELECT * FROM artikel");
        $this->db->execute();
        $jumlahData = $this->db->Rowcount();
        $totalPages = ceil($jumlahData / $jumlahDataPerHalaman);
        return $totalPages;
    }

    public function loadKategori()
    {
        $query = "SELECT * FROM kategori";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function filterKategori($slug, $halaman)
    {
        $jumlahDataPerHalaman = 4;
        $awalData = ($jumlahDataPerHalaman * $halaman) - $jumlahDataPerHalaman;
        $query = "SELECT * FROM artikel 
        JOIN kontributor ON artikel.id_artikel = kontributor.id_artikel 
        JOIN kategori ON kontributor.id_kategori = kategori.id_kategori
        WHERE kategori.slug_kategori = :slug 
        ORDER BY artikel.id_artikel DESC
        LIMIT $awalData, $jumlahDataPerHalaman";
        $this->db->query($query);
        $this->db->bind("slug", $slug);
        return $this->db->resultSet();
    }

    public function paginationKategori($slug)
    {
        $jumlahDataPerHalaman = 4;
        $this->db->query("SELECT * FROM artikel 
        JOIN kontributor ON artikel.id_artikel = kontributor.id_artikel 
        JOIN kategori ON kontributor.id_kategori = kategori.id_kategori
        WHERE kategori.slug_kategori = :slug");
        $this->db->bind("slug", $slug);
        $this->db->execute();
        $jumlahData = $this->db->Rowcount();
        $totalPages = ceil($jumlahData / $jumlahDataPerHalaman);
        return $totalPages;
    }

    public function findKategori($slug)
    {
        $query = "SELECT nama_kategori as nama FROM kategori WHERE slug_kategori = :slug";
        $this->db->query($query);
        $this->db->bind("slug", $slug);
        return $this->db->single();
    }
}
