<?php namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Pagina Principal';
        echo view('front/head_view', $data);
        echo view('front/navbar');
        echo view('front/index');
        echo view('front/footer_view');
    }

    public function quienes()
    {
        $data['titulo'] = 'Quienes Somos';
        echo view('front/head_view', $data);
        echo view('front/navbar');
        echo view('front/quienes-somos');
        echo view('front/footer_view');
    }

    public function acerca()
    {
         $data['titulo'] = 'Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar');
        echo view('front/acerca-de', );
        echo view('front/footer_view');
    }

    public function catalogo()
    {
    helper(['url']);
    $session = session();

    // Si querés restringirlo a usuarios logueados
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }
    $data['titulo'] = 'Catalogo';
    echo view('front/head_view',  $data);
    echo view('front/navbar');
    echo view('front/catalogo'); // <-- tu vista "en construcción"
    echo view('front/footer_view');
    }

    public function administracion()
    {
    helper(['url']);
    $session = session();

    // Si querés restringirlo a usuarios logueados
    if (!session()->get('logged_in')) {
        return redirect()->to('/login');
    }
    $data['titulo'] = "Administracion";
    echo view('front/head_view',  $data);
    echo view('front/navbar');
    echo view('front/administracion'); // <-- tu vista "en construcción"
    echo view('front/footer_view');
    }
}
