<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL ?>fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>css/style.css">


    <title><?= $data["judul"] ?></title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">Toko</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-item nav-link" href="<?= BASEURL; ?>produk">Produk</a>
                    <a class="nav-item nav-link" href="tentang_kami.html">Tentang Kami</a>
                    <?php if (isset($_SESSION["email"])) : ?>
                        <?php if(isset($_SESSION["role"]) === 1) : ?>
                            <a class="nav-item nav-link" href="<?= BASEURL; ?>admin">profile</a>
                        <?php else : ?>
                            <a class="nav-item nav-link" href="<?= BASEURL; ?>profile">profile</a>
                        <?php endif;?>
                        <a class="nav-item btn btn-danger" href="<?= BASEURL; ?>auth/logout">Logout</a>
                    <?php else : ?>
                    <a class="nav-item btn btn-primary" href="<?= BASEURL; ?>auth">Login</a>
                    <a class="nav-item btn btn-danger" href="<?= BASEURL; ?>auth/register">Register</a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->