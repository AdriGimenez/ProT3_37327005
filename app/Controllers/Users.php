<?php namespace App\Controllers;

class Users extends BaseController
{
    public function registro()
    {
        return view('front/registro');
    }

    public function login()
    {
        return view('front/login');
    }
}
