<?php


class Admin extends Controller{

    public function index(){

        if (isset($_SESSION["role"]) == 2) {
            header('Location:' . BASEURL );
        }

        $data["produk"] = $this->model('Admin_model')->getProduk();
        $data["judul"] = "Admin Page";
        $this->view('templates/header',$data);
        $this->view('admin/index',$data);
        $this->view('templates/footer');
    }

}