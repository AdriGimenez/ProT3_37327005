<?php
namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();
/**
 * @var RouteCollection $routes
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Pages::index');
$routes->get('quienes', 'Pages::quienes');
$routes->get('acerca', 'Pages::acerca');
$routes->get('catalogo', 'Pages::catalogo');
$routes->get('administracion', 'Pages::administracion');
$routes->get('login', 'Users::login');
$routes->get('registro','Users::registro');

/* Rutas de Registro de Usuarios */
$routes->get('registro', 'usuario_controller::create');
$routes->post('enviar-form', 'usuario_controller::formValidation');

/* Rutas de Login */
$routes->get('login', 'login_controller');
$routes->post('enviarlogin', 'login_controller::auth');
$routes->get('panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('logout', 'login_controller::logout');

#If(is_file(APPPATH . 'Config/' . ENVIROMENT . '/Routes.php')){
#	requiere APPPATH . 'Config/' . ENVIROMENT . '/Routes.php';
#}