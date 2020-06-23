
        <div class="container">
            <div class="row" style="margin:100px 0">
                <div class="col-md-6">
                    <img src="<?= BASEURL . 'img/' . $data["produk"]["gambar"] ?>" alt="" class="img-fluid img-thumbnail" style="width:100%;height:400px">
                </div>
                <div class="col-md-6">
                    <form action="<?= BASEURL ?>produk/transaksi/<?= $data["produk"]["id"] ?>" method="post">
                        <h3><?= $data["produk"]["nama"] ?></h3>
                        <p class="text-muted"><?= $data["produk"]["harga"] ?></p>
                        <div class="form-group col-md-2">
                            <input type="number" class="form-control" min="1" name="jumlah">
                        </div>
                        <?php if(isset($_SESSION["email"])) : ?>
                            <button type="submit" class="btn btn-primary">Add to cart</button>
                        <?php else : ?>
                            <button type="submit" class="btn btn-primary" disabled>Add to cart</button>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>