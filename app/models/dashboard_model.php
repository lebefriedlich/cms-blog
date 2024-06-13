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

    public function jumlahArtikel($id_penulis){
        $query = "SELECT COUNT(*) AS '0' FROM artikel AS a JOIN kontributor AS ktb ON a.id_artikel = ktb.id_artikel 
        WHERE ktb.id_penulis = $id_penulis";
        $this->db->query($query);
        return $this->db->single();
    }
}
