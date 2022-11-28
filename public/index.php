<?php   

//file utama yang akan diakses oleh public

if (!session_id()) session_start();
require '../vendor/autoload.php';

if (file_exists('../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable('../');
    $dotenv->load();
}

require_once '../app/init.php';       //teknik bootstraping dimana file ini akan memanggil seluruh aplikasi mvc nya

$app = new App;   //untuk menjalankan class app




//teknik bootstraping
/*yang kita panggil hanya 1 file yaitu file index
lalu file index.php memanggil file init.php yang ada di folder app
di fiile init.php kita memanggil semua class yang kita butuhkan*/