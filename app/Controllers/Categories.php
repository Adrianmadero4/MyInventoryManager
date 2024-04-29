<?php
namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Categories extends BaseController
{

    public function index()
    {
        $model = model(CategoryModel::class);
        $data = [
            'category'  => $model->getCategories(),
            'title' => 'List of Categories',
        ];

        return view('templates/menuHeader', $data)
            . view('categories/index')
            . view('templates/footer');
    }
    public function noSession()
    {

        return view('templates/menuHeader')
            . view('categories/noSession')
            . view('templates/footer');
    }

}

