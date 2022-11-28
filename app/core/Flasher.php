<?php 


class Flasher {

    public static function setFlash($pesan, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'tipe' => $tipe];
    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {
            $flash['pesan'] = $_SESSION['flash']['pesan'];
            $flash['tipe'] = $_SESSION['flash']['tipe'];
            unset($_SESSION['flash']);
            return $flash;
        }
    }
    
    public static function check() {
        if (isset($_SESSION['flash'])) {
            return true;
        }
    }
}






            // class Flasher {
            //     public static function setFlash($pesan, $aksi, $tipe)
            //     {
            //         $_SESSION['flash'] = [
            //             'pesan' => $pesan,
            //             'aksi'  => $aksi,
            //             'tipe'  => $tipe
            //         ];
            //     }
            
            //     public static function flash()
            //     {
            //         if( isset($_SESSION['flash']) ) {
            //             echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
            //                     Data Mahasiswa <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
            //                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //                     <span aria-hidden="true">&times;</span>
            //                     </button>
            //                 </div>';
            //             unset($_SESSION['flash']);
            //         }
            //     }
            // }