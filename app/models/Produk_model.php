<?php


class Produk_model extends Controller{

    public function __construct(){
        $this->db = new Database;
    }
    public function getAllProduk(){

        $query = "SELECT * FROM barang WHERE status = 'aktif'";

        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getProdukById($id){

        $query = "SELECT * FROM barang WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}
