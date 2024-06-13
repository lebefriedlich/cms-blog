<?php

class artikel_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function loadArtikel($halaman, $id_penulis)
    {
        $jumlahDataPerHalaman = 2;
        $awalData = ($jumlahDataPerHalaman * $halaman) - $jumlahDataPerHalaman;

        $query = "SELECT a.*, ktb.id_kontributor, p.id_penulis, p.nama AS nama_penulis, k.id_kategori, k.nama_kategori
        FROM artikel AS a
        JOIN kontributor AS ktb ON a.id_artikel = ktb.id_artikel
        JOIN kategori AS k ON ktb.id_kategori = k.id_kategori
        JOIN penulis AS p ON ktb.id_penulis = p.id_penulis 
        WHERE p.id_penulis = $id_penulis 
        ORDER BY a.id_artikel DESC LIMIT $awalData, $jumlahDataPerHalaman";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function pagination($id_penulis)
    {
        $jumlahDataPerHalaman = 2;
        $this->db->query("SELECT * FROM artikel AS a JOIN kontributor AS ktb ON a.id_artikel = ktb.id_artikel 
        WHERE ktb.id_penulis = $id_penulis");
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
    public function loadPenulis()
    {
        $query = "SELECT * FROM penulis";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function add($data)
    {
        $query = "INSERT INTO artikel (judul, slug, hari_tanggal, isi, gambar) 
                     VALUES (:judul, :slug, :hari_tanggal, :isi, :gambar)";
        $this->db->query($query);
        $this->db->bind("judul", $data['judul']);
        $this->db->bind("slug", $data['slug']);
        $this->db->bind("hari_tanggal", $data['hari_tanggal']);
        $this->db->bind("isi", $data['isi']);
        $this->db->bind("gambar", $data['image']);

        $lastInsertId = $this->db->lastInsertId();

        $query = "INSERT INTO kontributor (id_penulis, id_kategori, id_artikel) VALUES
                    (:id_penulis, :id_kategori, :id_artikel)";
        $this->db->query($query);
        $this->db->bind("id_penulis", $data['penulis']);
        $this->db->bind("id_kategori", $data['kategori']);
        $this->db->bind("id_artikel", $lastInsertId);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function find($slug)
    {
        $query = "SELECT artikel.*, penulis.nama 
        FROM artikel
        JOIN penulis ON artikel.id_penulis = penulis.id_penulis
        WHERE artikel.slug = :slug";
        $this->db->query($query);
        $this->db->bind("slug", $slug);
        return $this->db->single();
    }

    public function edit($data)
    {
        $query = "UPDATE artikel
                    SET judul = :judul, slug = :slug, isi = :isi";
        if (!empty($data['image'])) {
            $query .= ", gambar = :gambar";
        }
        $query .= " WHERE id_artikel = :id_artikel";

        $this->db->query($query);
        $this->db->bind("judul", $data['judul']);
        $this->db->bind("slug", $data['slug']);
        $this->db->bind("isi", $data['isi']);
        if (!empty($data['image'])) {
            $this->db->bind("gambar", $data['image']);
        }
        $this->db->bind("id_artikel", $data['id_artikel']);
        $this->db->execute();
        $jumlah_artikel_diubah = $this->db->rowCount();

        $query = "UPDATE kontributor
                    SET id_penulis = :id_penulis, id_kategori = :id_kategori, id_artikel = :id_artikel WHERE id_kontributor = :id_kontributor";
        $this->db->query($query);
        $this->db->bind("id_penulis", $data['penulis']);
        $this->db->bind("id_kategori", $data['kategori']);
        $this->db->bind("id_artikel", $data['id_artikel']);
        $this->db->bind("id_kontributor", $data['id_kontributor']);
        $this->db->execute();
        $jumlah_kontributor_diubah = $this->db->rowCount();

        if ($jumlah_artikel_diubah > 0) {
            return $jumlah_artikel_diubah;
        } else {
            return $jumlah_kontributor_diubah;
        }
    }

    public function delete($id_artikel, $id_kontributor)
    {
        $query = "DELETE FROM kontributor WHERE id_kontributor = :id_kontributor";
        $this->db->query($query);
        $this->db->bind("id_kontributor", $id_kontributor);
        $this->db->execute();
        $this->db->rowCount();

        $query = "DELETE FROM artikel WHERE id_artikel = :id_artikel";
        $this->db->query($query);
        $this->db->bind("id_artikel", $id_artikel);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
