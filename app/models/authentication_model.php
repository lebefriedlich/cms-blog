<?php

class authentication_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function checkEmail($email)
    {
        $query = "SELECT email FROM penulis WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $email);
        return $this->db->single();
    }
    public function login($data)
    {
        $query = "SELECT * FROM penulis WHERE email = :email";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $result = $this->db->single();

        if ($result) {
            $hashedPassword = $result['password'];
            $enteredPassword = $data['password'];

            if (password_verify($enteredPassword, $hashedPassword)) {
                return $result;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
}
