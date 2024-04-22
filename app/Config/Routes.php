<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //Ruta principal index sin login

$routes-> get('/pricing', 'Home::pricing');//Rutas para la página de precios

$routes-> get('/contact', 'Home::contact');//Rutas para la página de contacto
$routes-> get('/contacto', 'ContactoController::index');//Rutas para la página de contacto
