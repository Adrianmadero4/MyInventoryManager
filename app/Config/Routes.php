<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Categories; // Importa la clase Categories


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); //Ruta principal index sin login

//$routes-> get('/pricing', 'Home::pricing');//Rutas para la página de precios
$routes-> get('/pricing', 'PreciosController::precios');//Rutas para la página de precios del Controlador PreciosController de la vista Contact

//$routes-> get('/contact', 'Home::contact');//Rutas para la página de contacto
$routes-> get('/conocenos', 'ContactoController::index');//Rutas para la página de contacto del Controlador ContactoController de la vista Precios


$session = session();
if (!empty($session->get('user'))){
    $routes->get('categories', [Categories::class, 'index']);   //Muestra todas las categorías  
}else{
    $routes->get('categories', [Categories::class, 'noSession']); 
}

//Ruta para el login:
$routes-> get('/admin', 'Users::loginForm'); // Muestra el formulario para iniciar sesión
$routes-> post('/login', 'Users::checkUser'); // Obtenemos user y pass (Definidos en el modelo).
$routes->get('session', 'Users::closeSession');   //Cerrar sesion



