<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <h3 class="mb-3 text-center">Form Registrasi User</h3>
        <form method="POST" action="/admin/register">
            <?php if (Flasher::check()) : ?>
                <?php $flash = Flasher::flash() ?>
                <div class="alert alert-<?= $flash['tipe'] ?> alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <?= $flash['pesan'] ?>
                </div>
            <?php endif; ?>                    
            <div class="form-group">
                <label for="nama">Nama</label>
                <input class="form-control" type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input class="form-control" type="password" name="password1" id="confirm_password" required>
            </div>
            <button class="btn btn-primary btn-user btn-block" type="submit" name="register">Register</button>
        </form>
    </div>
    <div class="col-lg-4"></div>
</div>