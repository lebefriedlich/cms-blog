<?php

class penulis_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function loadPenulis()
    {
        $query = "SELECT * FROM penulis";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function checkEmail($email)
    {
        $query = "SELECT email FROM penulis WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $email);
        return $this->db->single();
    }
    public function add($data)
    {
        $query = "INSERT INTO penulis (nama, email, password) VALUES (:nama, :email, :password)";
        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("email", $data['email']);
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->db->bind("password", $password);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function edit($data, $id_penulis)
    {
        $query = "UPDATE penulis
              SET nama = :nama, email = :email";

        if (isset($data['password']) && !empty($data['password'])) {
            $query .= ", password = :password";
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        $query .= " WHERE id_penulis = :id_penulis";

        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("email", $data['email']);

        if (isset($data['password']) && !empty($data['password'])) {
            $this->db->bind("password", $data['password']);
        }

        $this->db->bind('id_penulis', $id_penulis);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id_penulis)
    {
        $query = "DELETE FROM penulis WHERE id_penulis = :id_penulis";
        $this->db->query($query);
        $this->db->bind("id_penulis", $id_penulis);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
