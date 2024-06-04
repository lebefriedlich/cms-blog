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
        $query = "INSERT INTO kategori (nama_kategori, slug_kategori, keterangan) VALUES (:nama, :slug_kategori, :keterangan)";
        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("slug_kategori", $data['slug']);
        $this->db->bind("keterangan", $data['keterangan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function edit($data, $id_kategori)
    {
        $query = "UPDATE kategori
              SET nama_kategori = :nama, slug_kategori = :slug_kategori, keterangan = :keterangan WHERE id_kategori = :id_kategori";

        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("slug_kategori", $data['slug']);
        $this->db->bind("keterangan", $data['keterangan']);
        $this->db->bind('id_kategori', $id_kategori);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function delete($id_kategori)
    {
        $query = "SELECT id_artikel FROM kontributor WHERE id_kategori = :id_kategori";
        $this->db->query($query);
        $this->db->bind("id_kategori", $id_kategori);
        $this->db->execute();
        $data['id_artikel'] = $this->db->resultSet();

        // Delete related articles
        if (!empty($data['id_artikel'])) {
            $query = "DELETE FROM kontributor WHERE id_kategori = :id_kategori";
            $this->db->query($query);
            $this->db->bind("id_kategori", $id_kategori);
            $this->db->execute();

            if ($this->db->rowCount() > 0) {
                $query = "DELETE FROM kategori WHERE id_kategori = :id_kategori";
                $this->db->query($query);
                $this->db->bind("id_kategori", $id_kategori);
                $this->db->execute();
                if ($this->db->rowCount() > 0) {
                    foreach ($data['id_artikel'] as $row) {
                        $query = "DELETE FROM artikel WHERE id_artikel = :id_artikel";
                        $this->db->query($query);
                        $this->db->bind("id_artikel", $row['id_artikel']);
                        $this->db->execute();
                        if ($this->db->rowCount() > 0) {
                            $deletionsOccurred = true;
                        }
                    }
                    if ($deletionsOccurred){
                        return 1;
                    }
                }
            } else {
                return -1;
            }
        }
    }
}
