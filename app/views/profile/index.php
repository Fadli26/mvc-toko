<div class="container">
    <div class="row" style="margin:100px 0">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="<?= BASEURL ?>profile/pesanan">Pesanan</a></li>
            </ul>
        </div>
        <div class="col-md-8">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama Barang</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">harga</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">tanggal</th>
                    <th scope="col">opsi</th>
                </tr>
            </thead>
            <tbody>

                <?php if(isset($data["kosong"])) : ?>
                <div class="alert alert-info" role="alert">
                    Keranjang Masih kosong,ayo Belanja
                </div>
                <?php else : ?>
                 <?php $i = 1; ?>
                <?php foreach($data["keranjang"] as $row) :  ?>
                <tr id="barang">
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row["nama"]; ?></td>
                    <td><input type="number" name="jumlah" class="jumlah" value="<?= $row["jumlah"]; ?>" min="1" style="width:50px;text-align:center"></td>
                    <td class="harga"><?= $row["harga"]; ?></td>
                    <td class="total"><?= $row["total"]; ?></td>
                    <td><?= $row["tanggal"]; ?></td>
                    <td>
                        <a href="<?= BASEURL ?>profile/hapusKeranjang/<?= $row["barang_id"]; ?>" class="btn btn-danger btn-sm">hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        </div>
    </div>
</div>




