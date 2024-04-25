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
            return view('Login/formularioLogin');
        }

        // If you want to get the validated data.
        $validData = $this->validator->getValidated();

        return view('Templates/menuHeader')
        . view('Login/success')
        . view('Templates/footer');


    }

    
}
