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
        $query = "SELECT artikel.*, penulis.nama 
        FROM artikel
        JOIN penulis ON artikel.id_penulis = penulis.id_penulis
        WHERE artikel.slug = :slug";
        $this->db->query($query);
        $this->db->bind("slug", $slug);
        return $this->db->single();
    }
}
