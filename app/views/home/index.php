
    <!-- hero -->
    <div class="jumbotron jumbotron-fluid">

    </div>
    <!-- akhir hero -->

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row text-center py-4">
                        <div class="col">
                            <h4>Recomended</h4>
                        </div>
                    </div>
                    <div class="row pb-5">
                        <?php foreach($data["produk"] as $row) : ?>
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="<?= BASEURL;  ?>img/<?= $row["gambar"]; ?>" style="width:100%;height:200px">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row["nama"]; ?></h5>
                                    <p class="card-text "><?= "Rp. " .number_format($row["harga"]); ?></p>
                                    <a href="<?= BASEURL ?>produk/singleProduk/<?= $row["id"]; ?>" class="card-link">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

   
    