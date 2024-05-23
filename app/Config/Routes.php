<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\secciones; // Importa la clase secciones
use App\Controllers\ProductsController; // Importa la clase Products

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false); //No deja buscar en los controladores posibles rutas

//MUY IMPORTANTE ACORDARSE DEL ORDEN DE LAS RUTAS, PARA QUE SE PUEDAN EJECUTAR TODAS Y NO QUE UNA IMPIDA LA EJECUCIÓN DE OTRA POR LA URL...

$routes->get('/', 'Home::index'); //Ruta principal index sin login

//$routes-> get('/pricing', 'Home::pricing');//Rutas para la página de precios
$routes-> get('/pricing', 'PreciosController::precios');//Rutas para la página de precios del Controlador PreciosController de la vista Contact
$routes-> get('/workingPricing', 'PreciosController::workingPrecios');//Rutas para la página de precios del Controlador PreciosController de la vista Contact

//$routes-> get('/contact', 'Home::contact');//Rutas para la página de contacto
$routes-> get('/conocenos', 'ContactoController::index');//Rutas para la página de contacto del Controlador ContactoController de la vista Precios

// Ruta para registrarse
$routes->get('/register', 'Users::registerForm'); // Muestra el formulario de registro
$routes->post('/register', 'Users::register'); // Envía los datos del formulario de registro

// Ruta para el login:
$routes-> get('/login', 'Users::loginForm'); // Muestra el formulario para iniciar sesión
$routes-> get('/admin', 'Users::checkUser'); // Muestra el formulario para iniciar sesión
$routes-> post('/admin', 'Users::checkUser'); // Obtenemos user y pass (Definidos en el modelo).
$routes->get('session', 'Users::closeSession');   //Cerrar sesion

// SESSION DE Secciones
$session = session();
if (!empty($session->get('user'))){
    $routes->get('secciones', [Secciones::class, 'index']);   //Muestra todas las secciones  
    
    $routes->get('secciones/new', [Secciones::class, 'new']);   //Formulario insertar secciones  - El new abre el formulario para insertar datos.
    $routes->post('secciones/createSection', [Secciones::class, 'create']);   //Ejecuta insertar secciones  - El create es el que hace el insert into (Inserta).
    
    $routes->get('secciones/update/(:segment)', [Secciones::class, 'update']);   //Ejecuta modificar secciones  
    $routes->post('secciones/update/updated/(:segment)', [Secciones::class, 'updatedSection']);   //Formulario modificar secciones  

    $routes->get('secciones/del/(:segment)', [Secciones::class, 'delete']);   //Ejecuta eliminar secciones  

    $routes->get('secciones/(:num)', [Secciones::class, 'show']); // Muestra un producto seleccionado por su ID
}else{
    $routes->get('secciones', [Secciones::class, 'noSession']); 
}

//SESION DE PRODUCTS
$session = session();
if (!empty($session->get('user'))){
    $routes->get('products', [ProductsController::class, 'index']);   //Muestra todos los productos 

    $routes->get('products/new', [ProductsController::class, 'new']);   //Formulario insertar productos  - El new abre el formulario para insertar datos.
    $routes->post('products/createProduct', [ProductsController::class, 'create']);   //Ejecuta insertar productos  - El create es el que hace el insert into (Inserta).

    $routes->get('products/update/(:segment)', [ProductsController::class, 'update']);   //Ejecuta modificar productos  
    $routes->post('products/update/updated/(:segment)', [ProductsController::class, 'updatedItem']);   //Formulario modificar productos  

    $routes->get('products/del/(:segment)', [ProductsController::class, 'delete']);   //Ejecuta eliminar productos  

    $routes->get('products/(:num)', [ProductsController::class, 'show']); // Muestra un producto seleccionado por su ID

}else{
    $routes->get('products', [ProductsController::class, 'noSession']); 
    $routes->get('products/new', [ProductsController::class, 'noSession']); 
    $routes->get('products/update/updated/(:segment)', [ProductsController::class, 'noSession']); 
    $routes->get('products/del/(:segment)', [ProductsController::class, 'noSession']); 
    $routes->get('products/(:segment)', [ProductsController::class, 'noSession']); 
}
