<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('front/index');
    }

    public function quienes()
    {
        return view('front/quienes-somos');
    }

    public function acerca()
    {
        return view('front/acerca-de');
    }
}
