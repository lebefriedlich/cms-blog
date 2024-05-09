<?php

class dashboard_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function jumlahPenulis(){
        $query = "SELECT COUNT(*) AS '0' FROM penulis";
        $this->db->query($query);
        return $this->db->single();
    }

    public function jumlahKategori(){
        $query = "SELECT COUNT(*) AS '0' FROM kategori";
        $this->db->query($query);
        return $this->db->single();
    }

    public function jumlahArtikel(){
        $query = "SELECT COUNT(*) AS '0' FROM artikel";
        $this->db->query($query);
        return $this->db->single();
    }
}
