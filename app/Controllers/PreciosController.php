<?php

namespace App\Controllers;

class PreciosController extends BaseController
{
    public function precios() {
        $nameProject = [
            "nombreProyecto" => "My Inventory Manager"
        ];
        return view('Templates/menuHeader', $nameProject) //$nameProject en los 3 returns para poder ver en la página de precios el nombre del proyecto con la "variable global".
        . view('Precios/indexPrecios', $nameProject) //nombre de la carpeta/nombreArchivo.
        . view('Templates/footer', $nameProject);
    }

    public function workingPrecios() {
        $nameProject = [
            "nombreProyecto" => "My Inventory Manager"
        ];
        return view('Templates/menuHeader', $nameProject) //$nameProject en los 3 returns para poder ver en la página de precios el nombre del proyecto con la "variable global".
        . view('Precios/workingPricing', $nameProject) //nombre de la carpeta/nombreArchivo.
        . view('Templates/footer', $nameProject);
    }

}
