<?php


class Auth_model extends Controller{

    public function __construct()
    {
        $this->db = new Database;
    }
    public function registrasi($data){

        $query = "INSERT INTO users VALUES(null,:email,:password,:role)";

        $this->db->query($query);
        $this->db->bind('email',$data["email"]);
        $this->db->bind('role',2);
        $this->db->bind('password',password_hash($data["password"],PASSWORD_DEFAULT));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getUsers(){

        $query = "SELECT * FROM users";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->resultset();
    }
    public function getUserByEmail($email){

        $query = "SELECT * FROM users WHERE email = :email";

        $this->db->query($query);
        $this->db->bind('email',$email);

        $this->db->execute();
        return $this->db->single();
    }
    

}