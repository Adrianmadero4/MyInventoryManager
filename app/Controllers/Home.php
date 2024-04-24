<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string //este index es el de las rutas: " $routes->get('/', 'Home::index');"
    {
        $nameProject = [
            "nombreProyecto" => "My Inventory Manager"
        ];
        return view('Templates/menuHeader', $nameProject)
        . view('IndexMyInventoryManager', $nameProject) //Cambiamos la ruta del Welcom Message al nombre de nuestra web. //+ hay que cambiar el nombre del archivo que está en la carpeta views.
        . view('Templates/footer', $nameProject);

    }

    
}
