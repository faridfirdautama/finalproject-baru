<h3 class="mb-3">Detail Barang</h3>

<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $data['barang']['nama_barang'] ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['barang']['tahun_pembuatan'] ?></h6>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Merek:</b> <?= $data['barang']['nama_merek'] ?></li>
                <li class="list-group-item"><b>Kategori:</b> <?= $data['barang']['nama_kategori'] ?></li>

            </ul>
            <div class="card-body">
                <a href="<?= BASEURL ?>/admin/daftar-barang" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>
