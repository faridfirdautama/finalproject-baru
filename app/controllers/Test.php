<?php 
class Test extends Controller {
    private $model;

    function __construct()
    {
        // $this->model= $this->model('Barang_model');
    }

    public function index()
    {
        $data['nama_barang'] = 'Home';
        // $data['barang'] = $this->model->getAllBarang();
        $data = [];
        $data['page'] = 'home';

        $this->view('admin/test', $data);
    }
}