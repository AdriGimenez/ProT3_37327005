<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Pagina Principal';
        return view('front/index', $data);
    }

    public function quienes()
    {
        $data['titulo'] = 'Quienes Somos';
        return view('front/quienes-somos', $data);
    }

    public function acerca()
    {
        $data['titulo'] = 'Acerca-de';
        return view('front/acerca-de', $data);
    }
}
