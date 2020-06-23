<?php


class Produk extends Controller{

    public function index(){
        $data["produk"] = $this->model('Produk_model')->getAllProduk();
        $data["judul"] = "Produk Page";
        $this->view('templates/header',$data);
        $this->view('produk/index',$data);
        $this->view('templates/footer');
    }
    public function singleProduk($id){

        $data["produk"] = $this->model('Produk_model')->getProdukById($id);
        $data["judul"] = "Single Produk Page";
        $this->view('templates/header',$data);
        $this->view('produk/single',$data);
        $this->view('templates/footer');
    }

    public function transaksi($barang_id){

        $produk = $this->model('Produk_model')->getProdukById($barang_id);

        if (isset($_SESSION["keranjang"])) {
            $keranjang = $_SESSION["keranjang"];
        }

        $keranjang[$barang_id] = [
            "nama" => $produk["nama"],
            "barang_id" => $produk["id"],
            "harga" => $produk["harga"],
            "jumlah" => $_POST["jumlah"],
            "total" => $_POST["jumlah"] * $produk["harga"],
            "tanggal" => date('d-m-Y')
        ];

        $_SESSION["keranjang"] = $keranjang;
        header('Location:' . BASEURL . 'profile');
    }
   

}