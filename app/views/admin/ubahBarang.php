<h3 class="mb-3 text-center">Form Ubah Barang</h3>

<div class="card shadow">
    <div class="card-body">
        <form action="" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input class="form-control" type="text" name="nama_barang" id="nama_barang" value="<?= $data['barang']['nama_barang'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <select class="form-control" name="merek" id="merek">
                            <?php foreach ($data['merek'] as $p) : ?>
                                <?php if ($p['id'] == $data['barang']['id_merek']) : ?>
                                    <option value="<?= $p['id'] ?>" selected><?= $p['nama_merek'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama_merek'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun_pembuatan">Tahun Pembuatan</label>
                        <input class="form-control" type="number" name="tahun_pembuatan" id="tahun_pembuatan" value="<?= $data['barang']['tahun_pembuatan'] ?>" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori">
                            <?php foreach ($data['kategori'] as $k) : ?>
                                <?php if ($k['id'] == $data['barang']['id_kategori']) : ?>
                                    <option value="<?= $k['id'] ?>" selected><?= $k['nama_kategori'] ?></option>
                                <?php else : ?>
                                    <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Ubah Barang</button>
            <a href="<?= BASEURL ?>/admin/daftar-barang" class="btn btn-warning">Batal</a>
        </form>
    </div>
</div>