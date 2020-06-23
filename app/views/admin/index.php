<div class="container">
    <div class="row" style="margin:100px 0">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item"><a href="<?= BASEURL ?>admin">Data Produk</a></li>
                <li class="list-group-item"><a href="<?= BASEURL ?>admin">Pesanan</a></li>
            </ul>
        </div>
        <div class="col-md-8">
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
        Tambah Produk
        </button>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">status</th>
                    <th scope="col">gambar</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($data["produk"] as $row) :  ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["harga"]; ?></td>
                    <td><?= $row["status"]; ?></td>
                    <td><img src="<?= BASEURL . 'img/' . $row["gambar"]; ?>" style="width:50px"></td>
                    <td>
                        <a href="#" class="btn btn-success btn-sm">Update</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
        
            </tbody>
        </table>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <div class="form-group">
                <label for="harga">status</label>
                <input type="text" class="form-control" id="harga" name="status">
            </div>
            <div class="form-group">
                <label for="gambar">gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>