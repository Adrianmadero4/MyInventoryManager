<?php
namespace App\Controllers;

use App\Models\SeccionesModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Secciones extends BaseController
{

    public function new() //Método para insertar datos en el formulario, llamando a createProduct.php
    {
        helper('form');

        return view('templates/menuHeader', ['title' => 'Crea tu sección del hogar'] ) //El 'titulo' va luego al createProduct.php en las vistas
            . view('secciones/createSection')
            . view('templates/footer');
    }

    public function index()
    {
        $model = model(SeccionesModel::class);
        $data = [
            'secciones'  => $model->getSecciones(),
            'title' => 'List of Secciones',
        ];

        return view('templates/menuHeader', $data)
            . view('secciones/index')
            . view('templates/footer');
    }
    public function noSession()
    {

        return view('templates/menuHeader')
            . view('secciones/noSession')
            . view('templates/footer');
    }

}

