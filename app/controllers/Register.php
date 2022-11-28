<?php

class Register extends Controller {

    private $userModel;

    function __construct()
    {
        $this->userModel = $this->model('User_model');
    }

    public function index() {
        $data['nama_barang'] = 'Register';
        $this->view('admin/header', $data);
        $this->view('admin/register', $data);
        $this->view('admin/footer');
    }

    public function regis() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            header('Location: ' . BASEURL . '/register');
        }

        $nama = htmlspecialchars($_POST['nama']);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password1 = $_POST['password1'];
        if ($password == $password1) {
            $row = $this->userModel->getUserByUsername($username);
            if ($row) {
                // User ada 
                Flasher::setFlash('Maaf, username sudah digunakan.', 'danger');
                header('Location: ' . BASEURL . '/register');
            } else {
                $insert = $this->userModel->insert($nama, $username, $password);
                if ($insert) {
                    Flasher::setFlash('Register berhasil, silahkan login.', 'success');
                    header('Location: ' . BASEURL . '/login');
                } else {
                    Flasher::setFlash('Gagal register.', 'danger');
                    header('Location: ' . BASEURL . '/register');
                }
            }
        } else {
            Flasher::setFlash('Password dan konfirmasi password salah.', 'danger');
            header('Location: ' . BASEURL . '/register');
        }
    }
}