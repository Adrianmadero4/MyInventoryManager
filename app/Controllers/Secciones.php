<?php
namespace App\Controllers;

use App\Models\SeccionesModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Secciones extends BaseController
{

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

