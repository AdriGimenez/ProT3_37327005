<?php namespace App\Controllers;

class Users extends BaseController
{
    public function registro()
    { 
        $data['titulo'] = 'Registro';
        return view('back/registro', $data);
    }

    public function login()
    { 
        $data['titulo'] = 'Login';
        return view('back/login', $data);
    }
}
