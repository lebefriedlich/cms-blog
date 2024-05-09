<?php

class home_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function article($halaman){
        // $query = "SELECT FROM artikel";
        // $this->db->query($query);
        // $this->db->execute();
        // $data = $this->db->rowCount();
        if ($halaman == 1){
            $jumlahDataPerHalaman = 5;
        } else {
            $jumlahDataPerHalaman = 4;
        }
        // $jumlahData = count($data);
        // $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
        $awaldata = ($jumlahDataPerHalaman * $halaman) - $jumlahDataPerHalaman;
        $query = "SELECT *
        FROM artikel
        ORDER BY id_artikel DESC
        LIMIT $awaldata, $jumlahDataPerHalaman";
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
