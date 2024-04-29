<?php
namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class ProductsController extends BaseController
{

    public function index()
    {
        $model = model(ProductModel::class);
        $data = [//Elementos del array almacenados 
            'products'  => $model->getProducts(),
            'nombreProducto' => 'Nombre del Producto',
        ];

        return view('templates/menuHeader', $data)
            . view('Products/index')
            . view('templates/footer');
    }

    public function show($slug = null){
        $model = model(ProductModel::class);
        $data['products'] = $model->getProducts($slug);
        if (empty($data['products'])) {
            throw new PageNotFoundException('Cannot find the product item: '.$slug);
        }
        $data['nombreProducto'] = $data['products']['nombreProducto'];
        return view('templates/menuHeader', $data)
            . view('Products/view')
            . view('templates/footer'); 
    }
    public function noSession()
    {

        return view('templates/menuHeader')
            . view('products/noSession')
            . view('templates/footer');
    }

}

