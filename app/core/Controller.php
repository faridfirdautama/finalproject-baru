<?php 


abstract class Controller                                                             // abstract class->class yang tidak bisa di-instansiasi. class utama dari class contoller
{
    abstract public function index();
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}



        // class Controller {                                         //class utama dari class contoller
        //     public function view($view, $data = [])
        //     {
        //         require_once '../app/views/' . $view . '.php';
        //     }
        
        //     public function model($model)
        //     {
        //         require_once '../app/models/' . $model . '.php';
        //         return new $model;
        //     }
        // }