<<<<<<< HEAD
<?php

class post_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show($slug)
    {
        $query = "SELECT artikel.*, penulis.nama, kategori.nama_kategori, kategori.slug_kategori
        FROM artikel
        JOIN kontributor ON artikel.id_artikel = kontributor.id_artikel 
        JOIN penulis ON kontributor.id_penulis = penulis.id_penulis 
        JOIN kategori ON kontributor.id_kategori = kategori.id_kategori
        WHERE artikel.slug = :slug";
        $this->db->query($query);
        $this->db->bind("slug", $slug);
        return $this->db->single();
    }

    public function updatePengunjung($id_artikel)
    {
        $query = "UPDATE artikel
        SET jumlah_dikunjungi = jumlah_dikunjungi + 1
        WHERE id_artikel = :id_artikel;";
        $this->db->query($query);
        $this->db->bind("id_artikel", $id_artikel);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
=======
<?php

class post_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function show($slug)
    {
        $query = "SELECT artikel.*, penulis.nama, kategori.nama_kategori, kategori.slug_kategori
        FROM artikel
        JOIN kontributor ON artikel.id_artikel = kontributor.id_artikel 
        JOIN penulis ON kontributor.id_penulis = penulis.id_penulis 
        JOIN kategori ON kontributor.id_kategori = kategori.id_kategori
        WHERE artikel.slug = :slug";
        $this->db->query($query);
        $this->db->bind("slug", $slug);
        return $this->db->single();
    }

    public function updatePengunjung($id_artikel)
    {
        $query = "UPDATE artikel
        SET jumlah_dikunjungi = jumlah_dikunjungi + 1
        WHERE id_artikel = :id_artikel;";
        $this->db->query($query);
        $this->db->bind("id_artikel", $id_artikel);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
>>>>>>> parent of 87c2a58 (revisi lagi)
