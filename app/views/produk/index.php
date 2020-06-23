<section class="breadcump">
        <div class="container">
            <div class="row" style="margin:100px 0 0">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Makanan dan Minuman"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="produk">
        <div class="container">
            <!-- produk -->
            <div class="row mb-2">
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
            <!-- akhir produk -->
        </div>
    </section>