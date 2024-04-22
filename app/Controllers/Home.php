<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string //este index es el de las rutas: " $routes->get('/', 'Home::index');"
    {
        return view('IndexMyInventoryManager'); //Cambiamos la ruta del Welcom Message al nombre de nuestra web.
        //+ hay que cambiar el nombre del archivo que está en la carpeta views.
    }

    public function pricing() {
        //return "Aquí mostraremos los precios";
        return view('header');
        //return view('footer');
    }

    public function contact() {
        return view('header');
    }
}
