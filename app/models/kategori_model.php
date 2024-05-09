<?php

class kategori_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function loadKategori($halaman)
    {
        $jumlahDataPerHalaman = 3;
        $awalData = ($jumlahDataPerHalaman * $halaman) - $jumlahDataPerHalaman;

        $query = "SELECT * FROM kategori LIMIT $awalData, $jumlahDataPerHalaman";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function pagination()
    {
        $jumlahDataPerHalaman = 3;
        $this->db->query("SELECT * FROM kategori");
        $this->db->execute();
        $jumlahData = $this->db->Rowcount();
        $totalPages = ceil($jumlahData / $jumlahDataPerHalaman);
        return $totalPages;
    }

    public function add($data)
    {
        $query = "INSERT INTO kategori (nama_kategori, keterangan) VALUES (:nama, :keterangan)";
        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("keterangan", $data['keterangan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function edit($data, $id_kategori)
    {
        $query = "UPDATE kategori
              SET nama_kategori = :nama, keterangan = :keterangan WHERE id_kategori = :id_kategori";

        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("keterangan", $data['keterangan']);
        $this->db->bind('id_kategori', $id_kategori);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
