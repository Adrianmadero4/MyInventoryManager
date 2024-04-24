<?php

namespace App\Controllers;

class ContactoController extends BaseController
{

    public function index() {
        return view('Templates/menuHeader')
        . view('contact/indexContacto') //nombre de la carpeta/nombreArchivo.
        . view('Templates/footer');
    }

}
