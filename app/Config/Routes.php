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

# $routes->get('registro', 'Usuario_controller::create');
$routes->post('enviar-form', 'Usuario_controller::formValidation');

# $routes->get('login', 'Login_controller::index');
$routes->post('login', 'Login_controller::auth');
$routes->get('panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('logout', 'Login_controller::logout');


$routes->get('registro', 'Users::registro');
$routes->get('login', 'Users::login');
