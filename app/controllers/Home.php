<?php 


class Home extends Controller {
    private $model;

    function __construct()
    {
        $this->model= $this->model('Barang_model');
    }

    public function index()
    {
        $data['nama_barang'] = 'Home';
        $data['barang'] = $this->model->getAllBarang();
        $data['page'] = 'home';

        $this->view('home/index', $data);
    }
}




        // class Home extends Controller {
        //     public function index()
        //     {
        //         $data['judul'] = 'Home';
        //         $data['nama'] = $this->model('User_model')->getUser();
        //         $this->view('templates/header', $data);
        //         $this->view('home/index', $data);
        //         $this->view('templates/footer');
        //     }
        // }
