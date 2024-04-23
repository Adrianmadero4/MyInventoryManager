<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    /*public function index(): string //este index es el de las rutas: " $routes->get('/', 'Home::index');"
    {
        return view('contact/inicio'); //Cambiamos la ruta del Welcom Message al nombre de nuestra web.
        //+ hay que cambiar el nombre del archivo que está en la carpeta views.
    }*/

    public function index() {
        return view('Templates/header')
        . view('contact/indexContacto') //nombre de la carpeta/nombreArchivo.
        . view('Templates/footer');
    }

}
