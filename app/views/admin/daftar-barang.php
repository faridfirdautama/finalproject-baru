<h3 class="mb-3 text-center">Form Tambah Barang Baru</h3>
<div class="card shadow">
    <div class="card-body">
        <form action="<?= BASEURL ?>/admin/tambah-barang" method="post">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input class="form-control" type="text" name="nama_barang" id="nama_barang" required>
                    </div>
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <select class="form-control" name="merek" id="merek" required>
                            <option value="">--- Pilih Merek ---</option>
                            <?php if ($data['merek'] != []) : ?>
                                <?php foreach ($data['merek'] as $p) : ?>
                                    <option value="<?= $p['id'] ?>"><?= $p['nama_merek'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun_pembuatan">Tahun Pembuatan</label>
                        <input class="form-control" type="number" name="tahun_pembuatan" id="tahun_pembuatan" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori" required>
                            <option value="">--- Pilih Kategori ---</option>
                            <?php if ($data['kategori'] != []) : ?>
                                <?php foreach ($data['kategori'] as $k) : ?>
                                    <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Tambah Barang</button>
            <button class="btn btn-danger" type="reset">Reset</button>
        </form>
        
        <hr>

        <h3>List Barang</h3>
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

        <table id="tbl-daftar-barang" class="table dt-responsive nowrap" style="width: 100%;">
            <thead class="thead-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Tahun Pemebuatan</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($data['barang'] != []) : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($data['barang'] as $b) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $b['nama_barang'] ?></td>
                            <td><?= $b['tahun_pembuatan'] ?></td>
                            <td><?= $b['nama_kategori'] ?></td>
                            <td class="text-center">
                                <a class="badge badge-info" href="<?= BASEURL ?>/admin/detail-barang/<?= $b['id'] ?>">Detail ></a>
                                <a class="badge badge-warning" href="<?= BASEURL ?>/admin/ubah-barang/<?= $b['id'] ?>">Ubah</a>
                                <a class="badge badge-danger" href="<?= BASEURL ?>/admin/hapus-barang/<?= $b['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="5"><strong>Tidak ada data barang</strong></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>