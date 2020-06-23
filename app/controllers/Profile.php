<?php


class Profile extends Controller{
    public function index(){

        if (isset($_SESSION["keranjang"])) {
            $data["keranjang"] = $_SESSION["keranjang"];
        }else{
            $data["kosong"] = true;
        }
        
        $data["judul"] = "Profile Page";
        $this->view('templates/header',$data);
        $this->view('profile/index',$data);
        $this->view('templates/footer');
        
    }
    public function hapusKeranjang($id){

        unset($_SESSION["keranjang"][$id]);
        header('Location:' . BASEURL . 'profile');
    }

    
}