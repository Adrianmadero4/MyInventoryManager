<?php
namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class ProductsController extends BaseController
{

    public function new() //Método para insertar datos en el formulario, llamando a createProduct.php
    {
        helper('form');

        return view('templates/menuHeader', ['title' => 'Crea tu nuevo producto'] ) //El 'titulo' va luego al createProduct.php en las vistas
            . view('Products/createProduct')
            . view('templates/footer');
    }

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


    public function create() //Método que recoge los datos del formulario del new al haber insertado el producto.

    {
        helper('form');

        $data = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($data, [
            'nombreProducto' => 'required|max_length[50]|min_length[2]',
            'descripcion'  => 'required|max_length[250]|min_length[5]',
        ])) {
            // The validation fails, so returns the form.
            return $this->new();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(ProductModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);

        return view('templates/header', ['title' => 'Create a news item'])
            . view('news/success')
            . view('templates/footer');
    }

}

