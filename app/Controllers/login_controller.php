<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuarios_model;

class login_controller extends BaseController
{
	public function index()
	{
		helper(['form', 'url']);

		$dato['titulo']='login';
		echo view('front/head_view', $dato);
		echo view('front/navbar');
		echo view('back/login');
		echo view('front/footer_view');
	}

	public function auth()
	{
		$session = session();
		$model = new usuarios_model();

		// traemos los datos del formulario
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');

		$data = $model->where('email', $email)->first();
if ($data) {
    $hashed_password = $data['password'];
    $baja = $data['baja'];

    if ($baja == 'SI') {
        $session->setFlashdata('msg', 'usuario dado de baja');
        return redirect()->to('/login');
    }

    $input_password = $this->request->getVar('password');
    $verify_pass = password_verify($input_password, $hashed_password);

    if ($verify_pass) {
        // Datos de sesión
        $ses_data = [
            'id_usuario' => $data['id_usuario'],
            'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
            'email' => $data['email'],
            'usuario' => $data['usuario'],
            'perfil_id' => $data['perfil_id'],
            'logged_in' => TRUE
        ];
        $session->set($ses_data);

        $session->setFlashdata('msg', 'Bienvenido!!');
        return redirect()->to('/panel');
    } else {
        $session->setFlashdata('msg', 'Contraseña incorrecta');
        return redirect()->to('/login');
    }
} else {
    $session->setFlashdata('msg', 'No existe el Email o es Incorrecto');
    return redirect()->to('/login');
}

	}

	public function logout()
	{
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}
}