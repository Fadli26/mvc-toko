<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
        <h4 class="mt-5 text-center pb-3">Register</h4>
        <div class="row">
            <div class="col">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <form action="<?= BASEURL; ?>auth/tambah" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="password1">
            </div>
            <button type="submit" class="btn btn-primary mb-5">Submit</button>
        </form>
    </div>
</div>