<?php



class Admin_model extends Controller{

    public function __construct(){
        $this->db = new Database;
    }
    public function getProduk(){
        
        $query = "SELECT * FROM barang";

        $this->db->query($query);
        return $this->db->resultSet();
    }
}

?>