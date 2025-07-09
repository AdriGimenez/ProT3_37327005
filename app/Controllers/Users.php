<?php namespace App\Controllers;

class Users extends BaseController
{
    public function registro()
    { 
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar');
        echo view('back/registro');
        echo view('front/footer_view');
    }

    public function login()
    { 
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar');
        echo view('back/login');
        echo view('front/footer_view');
    }
}