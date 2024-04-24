<?php

namespace App\Controllers;

class PreciosController extends BaseController
{
    public function precios() {
        return view('Templates/menuHeader')
        . view('Precios/indexPrecios') //nombre de la carpeta/nombreArchivo.
        . view('Templates/footer');
    }

}
