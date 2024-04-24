<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    protected $helpers = ['form'];

    public function formulario()  //este index es el de las rutas: " $routes->get('/', 'Home::index');"
    {
        if (! $this->request->is('post')) {
        return view('Templates/menuHeader')
        . view('Login/formularioLogin') //Cambiamos la ruta del Welcom Message al nombre de nuestra web. //+ hay que cambiar el nombre del archivo que está en la carpeta views.
        . view('Templates/footer');
        }

        $rules = [
            // @TOoDO
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (! $this->validateData($data, $rules)) {
            return view('formularioLogin');
        }

        // If you want to get the validated data.
        $validData = $this->validator->getValidated();

        return view('success');

    }

    //public function enviarLogin() {
        //$valor1 = $_POST['valor1'];
        //$valor2 = $_POST['valor2'];

        //echo $valor1 + $valor2;
    //}

    
}
