<?php

class Auth extends Controller{
    public function index(){
        $data["judul"] = "Login Page";
        $this->view('templates/header',$data);
        $this->view('auth/index');
        $this->view('templates/footer');
    
    }
    public function register(){
        $data["judul"] = "Register Page";
        $this->view('templates/header',$data);
        $this->view('auth/register');
        $this->view('templates/footer');
        
    }
    public function tambah(){

        $email = $_POST["email"];

        $user = $this->model('Auth_model')->getUserByEmail($email);

        // var_dump($user);
        // die();

        // kalau  ada user
        if ($user) {
            Flasher::setFlash('registrasi','gagal','ditambahkan','danger');
            header('Location: ' . BASEURL . 'auth/register');
            exit;
        }else{
            if ($_POST["password"] != $_POST["password1"]) {
            Flasher::setFlash('password','tidak','sama','warning');
            header('Location: ' . BASEURL . 'auth/register');
            }else{
                if ($this->model('Auth_model')->registrasi($_POST) > 0) {
                    Flasher::setFlash('registrasi','berhasil','ditambahkan','success');
                    header('Location: ' . BASEURL . 'auth/register');
                    exit;
                }
            }
        }

    }

    public function login(){

        if (isset($_POST["submit"])) {

            $email = $_POST["email"];
            $password = $_POST["password"];

            $user = $this->model('Auth_model')->getUserByEmail($email);

            if ($user) {
                if (password_verify($password,$user["password"])) {
                    $_SESSION["email"] = $user["email"];
                    $_SESSION["role"] = $user["role_id"];

                    if ($user["role_id"] == 1) {
                        header('Location:' . BASEURL . 'admin');
                    }else{
                        header('Location:' . BASEURL);
                    }
                }else{
                    Flasher::setFlash('Password','anda','salah','danger');
                    exit;
                }
            }else{
                Flasher::setFlash('Email','tidak','terdaftar','danger');
                exit;
            }

    

        }
    }

    public function logout(){

        $_SESSION["email"] = '';
        $_SESSION["role"] = '';
        unset($_SESSION["email"]);
        unset($_SESSION["role"]);
        session_destroy();

        header('Location:' . BASEURL);
    }

    

}