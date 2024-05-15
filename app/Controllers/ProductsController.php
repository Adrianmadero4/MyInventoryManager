<?php
namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\SeccionesModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class ProductsController extends BaseController
{

    /*public function new() //Método para insertar datos en el formulario, llamando a createProduct.php
    {
        helper('form'); //Para devolver todo a la vista
        

        return view('templates/menuHeader', ['title' => 'Crea tu nuevo producto'] ) //El 'titulo' va luego al createProduct.php en las vistas
            . view('Products/createProduct')
            . view('templates/footer');
    }*/
    
    public function new() //Método para insertar datos en el formulario, llamando a createProduct.php
    {
        helper('form'); //Para devolver todo a la vista

        //Pero si además, queremos controlar las categorías para que el usuario no pueda indicar alguna que no existe:
        $model = model(SeccionesModel::class);
        if ($data['section'] = $model->findAll()) { //el campo section está inventado ['inventado'] (izquierda del igual inventado).
            return view('templates/menuHeader', ['title' => 'Crea tu nuevo producto'] ) //El 'titulo' va luego al createProduct.php en las vistas
            . view('Products/createProduct', $data)
            . view('templates/footer');
        } else {
            // Si no se encuentran secciones, mostramos página de error no hay secciones
            return view('templates/menuHeader', ['title' => 'Error al intentar crear producto'] ) //El 'titulo' va luego al createProduct.php en las vistas
            . view('Products/errorNoSection')
            . view('templates/footer');
        }
    }
    

    public function index()
    {
        $model = model(ProductModel::class);
        $data = [
            'products' => $model->getProducts(),
            'title' => 'Lista de productos',
            'model' => $model // Pasar el modelo a la vista
        ];

        return view('templates/menuHeader', $data)
            . view('Products/index')
            . view('templates/footer');
    }



    public function show($id = null){ //Para ver un producto en especifico
        $model = model(ProductModel::class);
        $product = $model->getById($id);

        if (empty($product)) {
            throw new PageNotFoundException('No se puede encontrar el producto');
        }

        $data = [
            'product' => $product,
            'model' => $model // Pasar el modelo a la vista
        ];
    
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

    // Verificar si hay al menos una categoría en la base de datos
    public function checkSectionExist() {
        $categoryModel = new SeccionesModel(); // 
        $categories = $categoryModel->findAll();

        return !empty($categories);
    }


    public function create() //Método que recoge los datos del formulario del new al haber insertado el producto.

    {
        helper('form'); // Ayuda para validar los datos.


        $data = $this->request->getPost(['nombreProducto', 'descripcion' ,'stock', 'guardado_en']);

        // Chequear las validaciones del formulario de crear.
        if (! $this->validate ([
            'nombreProducto' => 'required|max_length[50]|min_length[2]',
            'descripcion'  => 'required|max_length[250]|min_length[5]',
            'id_seccion'  => 'required', // Viene de la vista createProduct, del: select name="id_seccion";
            'stock' =>'min_length[0]',
            'guardado_en' => 'max_length[50]|min_length[0]',
            'precio_compra' => 'min_length[0]',
            'precio_venta' => 'min_length[0]',
            'fecha_compra' => 'min_length[0]',
            'fecha_venta' => 'min_length[0]',
            'imagen' => 'max_size[imagen,50000]',
            /*'documentos' => 'max_size[documentos,50000]'*/
        ])) {
            // Falla la validación, volvemos al formulario.
            return $this->new();
        }

        // Recoge los datos ya validados en la variable $post.
        $post = $this->validator->getValidated();

        $foto = $this->request->getFile('imagen');
        $fotoName = $foto->getName();
        $foto->move(ROOTPATH . 'public/images/imgPrivate',$fotoName);

        $model = model(ProductModel::class);

        $model->save([ //Esto es como el insert into
            'nombreProducto' => $post['nombreProducto'], //Esto viene del name del input en el formulario
            'slug'  => url_title($post['nombreProducto'], '-', true), //Generamos el slug automaticamente a partir del nombre del producto
            'descripcion'  => $post['descripcion'],
            'id_seccion'  => $post['id_seccion'], // El id_seccion de la derecha viene de la vista createProduct, del: select name="id_seccion"; el de la izq: campos de las tablas. lo de post viene siempre de formulario.
            'guardado_en'  => $post['guardado_en'],
            'stock'  => $post['stock'],
            'precio_compra'  => $post['precio_compra'],
            'precio_venta'  => $post['precio_venta'],
            'fecha_compra'  => $post['fecha_compra'],
            'fecha_venta'  => $post['fecha_venta'],
            'imagen'  => $fotoName, //Aqui en el fotoName viene almacenado el nombre de la imagen
            /*'documentos'  => $post['documentos'],*/
        ]);

        return view('templates/menuHeader', ['title' => 'Create a news item'])
            . view('Products/success')
            . view('templates/footer');
    }

    

    public function delete($id){//le pasamos como identificador la variable id
        if ($id==null){
            throw new PageNotFoundException('No se puede borrar el producto');
        }

        //si no es null:
        $model = model(ProductModel::class);

        /*if ($model->where('id', $id)->find()) {//busca la noticia del id
            $model->where('id', $id)->delete();//y si la encuentra la borra
        }else{
            throw new PageNotFoundException('Selected item does not exist in database');
        }// y si no hay noticia con ID, sacamos otro mensaje.*/

        if ($model ->getById($id)) {
            if ($model ->delete($id)){
                //return redirect()->to(base_url(''));

            }
        }else{
            throw new PageNotFoundException('El producto seleccionado no existe');
        }// y si no hay noticia con ID, sacamos otro mensaje.

        /*Nos vamos directamente a la pag. principal*/

        
        return view('templates/menuHeader', ['title'=> 'Delete item'])
            . view('Products/delete')
            . view('templates/footer');
    }


    public function update($id){//le pasamos como identificador la variable id y abajo hace falta el helper form

        helper('form');

        if ($id==null){
            throw new PageNotFoundException('No se puede actualizar el producto');
        }

        //si no es null:
        $model = model(ProductModel::class); // Apunta a product
        $Sectionmodel = model(SeccionesModel::class); // Apunta a secciones

        if ($model->where('id', $id)->find()) {//busca la noticia del id
            $data = [
                'products' => $model ->where(['id' => $id])->first(), // Contendrá todas las noticias
                'title' => 'Actualizar ' , //ojo si da error en la linea 224 del header que es por esto o por justo la de arriba
                'id_seccion' => $Sectionmodel->findAll(), // Buscará todas las categorías
            ]; // Ahora habría que modificar la vista de update.php

        }else{
            throw new PageNotFoundException('El producto seleccionado no existe');
        }// y si no hay noticia con ID, sacamos otro mensaje.


        return view('templates/menuHeader', $data)
            . view('Products/update')
            . view('templates/footer');
    }

    public function updatedItem($id)
    {
        helper('form');
 
        // Checks whether the submitted data passed the validation rules.
        if (! $this->validate([
            'nombreProducto' => 'required|max_length[50]|min_length[2]',
            'descripcion'  => 'required|max_length[250]|min_length[5]',
            'id_seccion'  => 'required', // Viene de la vista createProduct, del: select name="id_seccion";
            'stock' =>'min_length[0]',
            'guardado_en' => 'max_length[50]|min_length[0]',
            'precio_compra' => 'min_length[0]',
            'precio_venta' => 'min_length[0]',
            'fecha_compra' => 'min_length[0]',
            'fecha_venta' => 'min_length[0]',
            'imagen' => 'max_size[imagen,50000]',
            /*'documentos' => 'max_size[documentos,50000]'*/
        ])) {
            // The validation fails, so returns the form.
            return $this->update($id);
        }
 
        // Gets the validated data.
        $post = $this->validator->getValidated();
 
        $data = [
            'id' => $id, //Aqui hay que recoger el id para que el método save modifique y no inserte. (Diferencia principal entre insertar y modificar)
            'nombreProducto' => $post['nombreProducto'], //Esto viene del name del input en el formulario
            'slug'  => url_title($post['nombreProducto'], '-', true), //Generamos el slug automaticamente a partir del nombre del producto
            'descripcion'  => $post['descripcion'],
            'id_seccion'  => $post['id_seccion'], // El id_seccion de la derecha viene de la vista createProduct, del: select name="id_seccion"; el de la izq: campos de las tablas. lo de post viene siempre de formulario.
            'guardado_en'  => $post['guardado_en'],
            'stock'  => $post['stock'],
            'precio_compra'  => $post['precio_compra'],
            'precio_venta'  => $post['precio_venta'],
            'fecha_compra'  => $post['fecha_compra'],
            'fecha_venta'  => $post['fecha_venta'],
            /*'imagen'  => $post['imagen'],
            'documentos'  => $post['documentos'],*/
        ];
        $model = model(ProductModel::class);
        $model->save($data);

        //Nos vamos directamente a la pag. principal
        /*return redirect()->to(base_url());*/
       
        
        return view('templates/menuHeader', ['title' => 'Item updated'])
            . view('Products/succes')
            . view('templates/footer');
    }


}

