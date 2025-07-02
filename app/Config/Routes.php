<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('quienes', 'Pages::quienes');
$routes->get('acerca', 'Pages::acerca');
$routes->get('registro', 'Users::registro');
$routes->get('login', 'Users::login');