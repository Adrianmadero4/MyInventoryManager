<?php

namespace App\Controllers;

class ContactoController extends BaseController
{

    public function index() {
        $nameProject = [
            "nombreProyecto" => "My Inventory Manager"
        ];
        return view('Templates/menuHeader', $nameProject)
        . view('AboutUs/indexConocenos', $nameProject) //nombre de la carpeta/nombreArchivo.
        . view('Templates/footer', $nameProject);
    }

}
