<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //Ruta principal index sin login

//$routes-> get('/pricing', 'Home::pricing');//Rutas para la página de precios
$routes-> get('/pricing', 'PreciosController::precios');//Rutas para la página de precios del Controlador PreciosController de la vista Contact

//$routes-> get('/contact', 'Home::contact');//Rutas para la página de contacto
$routes-> get('/contact', 'ContactoController::index');//Rutas para la página de contacto del Controlador ContactoController de la vista Precios
