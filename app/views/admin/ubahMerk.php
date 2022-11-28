<h3 class="mb-3 text-center">Form Ubah Merek</h3>

<div class="card shadow">
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="nama_merek">Nama Merek</label>
                        <input class="form-control" type="text" name="nama_merek" id="nama_merek" value="<?= $data['merek']['nama_merek'] ?>" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Ubah Merek</button>
            <a href="<?= BASEURL ?>/admin/merek" class="btn btn-warning">Batal</a>
        </form>
    </div>
</div>