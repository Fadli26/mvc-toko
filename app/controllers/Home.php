<?php


class Home extends Controller{

    public function index(){
        $data["produk"] = $this->model('Produk_model')->getAllProduk();
        $data["judul"] = "Home Page";
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }

}