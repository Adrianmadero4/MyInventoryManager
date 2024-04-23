<?php

namespace App\Controllers;

class PreciosController extends BaseController
{
    public function precios() {
        return view('Templates/header')
        . view('Precios/indexPrecios') //nombre de la carpeta/nombreArchivo.
        . view('Templates/footer');
    }

}
