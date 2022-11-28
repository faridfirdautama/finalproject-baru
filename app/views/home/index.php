<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Aplikasi pengelolaan barang inventaris" />
    <meta name="author" content="DAQWA" />

    <title><?= APP_NAME ?> - Landing</title>
    <link rel="icon" href="<?= BASEURL ?>/fav.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= BASEURL ?>/css/custom-style.css" rel="stylesheet" />

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.17/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap4.min.css">
</head>

<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="">Inventaris</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#barang" class="nav-link js-scroll-trigger">Daftar Barang</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL ?>/login" class="nav-link">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2>
                        Selamat datang di <?= APP_NAME ?>!
                    </h2>
                    <hr />
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-white mb-5">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore culpa tenetur velit temporibus? Nulla, molestiae.!
                    </p>
                </div>
            </div>
        </div>
    </header>

    <section id="barang" class="bg-light text-center">
        <div class="container">
            <h4>Dafta Barang</h4>
            <hr>
            <p>Barang yang tersedia di <?= APP_NAME ?>.</p>
            <table id="daftar-barang" class="table dt-responsive nowrap" style="width: 100%;">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Tahun Pembuatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($data['barang'] as $b) : ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $b['nama_barang'] ?></td>
                            <td><?= $b['nama_kategori'] ?></td>
                            <td><?= $b['tahun_pembuatan'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small bg-dark">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3 text-white">
            Copyright &copy; 2020<a href=""> DAQWA</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?= BASEURL ?>/js/jquery.min.js"></script>
    <script src="<?= BASEURL ?>/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= BASEURL ?>/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= BASEURL ?>/js/creative.min.js"></script>

    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.4/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.4/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $('#daftar-barang').DataTable();
    </script>
</body>

</html>