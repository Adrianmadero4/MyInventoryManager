<?php
namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\SeccionesModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class ProductsController extends BaseController
{ 
    public function new()
    {
        helper('form');
        
        $model = model(SeccionesModel::class);
        $session = session();
        $userId = $session->get('user_id');
        
        // Obtener las secciones del usuario actual
        $seccionesUsuario = $model->where('id_usuario', $userId)->findAll();
        
        // Verificar si se encontraron secciones para el usuario actual
        if ($seccionesUsuario) {
            $data['seccionesUsuario'] = $seccionesUsuario;
            
            return view('templates/menuHeader', ['title' => 'Crea tu nuevo producto'])
                . view('Products/createProduct', $data)
                . view('templates/footer');
        } else {
            // Si no se encuentran secciones, mostrar página de error
            return view('templates/menuHeader', ['title' => 'Error al intentar crear producto'])
                . view('Products/errorNoSection')
                . view('templates/footer');
        }
    }
    
    
    public function index()
    {
        $model = model(ProductModel::class);
        $session = session();
        $userId = $session->get('user_id');
    
        // Obtener las secciones del usuario actual
        $seccionModel = new SeccionesModel();
        $seccionesUsuario = $seccionModel->where('id_usuario', $userId)->findAll();
        $seccionIds = array_column($seccionesUsuario, 'id');
    
        // Obtener los productos de las secciones del usuario
        $products = $model->whereIn('id_seccion', $seccionIds)->findAll();
        foreach ($products as &$product) {
    if (!array_key_exists('nombre_seccion', $product)) {
        $product['nombre_seccion'] = 'Sección no definida'; // O algún valor por defecto.
    }
}

    
        $data = [
            'products' => $products,
            'title' => 'Listado de productos',
            'model' => $model // Pasar el modelo a la vista
        ];
    
        return view('templates/menuHeader', $data)
            . view('Products/index')
            . view('templates/footer');
    }
    
    public function show($id = null){ //Para ver un producto en especifico
        $model = model(ProductModel::class);
        $product = $model->getById($id);
        //var_dump($this->request->getPost()); Comprobar erorres
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

    public function create()
    {
        helper('form');
        $session = session();
        $userId = $session->get('user_id');
        $userRole = $session->get('user_role');
    
        // Obtenemos el modelo de secciones y productos
        $seccionModel = new SeccionesModel();
        $productModel = new ProductModel();
    
        // Obtenemos las secciones del usuario
        $seccionesUsuario = $seccionModel->where('id_usuario', $userId)->findAll();
        $seccionIds = array_column($seccionesUsuario, 'id');
    
        // Contamos los productos del usuario basándonos en las secciones a las que pertenece
        $existingProducts = $productModel->whereIn('id_seccion', $seccionIds)->countAllResults();
    
        // Límites de productos según el rol del usuario
        switch ($userRole) {
            case 'Basico':
                $maxProducts = 20;
                break;
            case 'Advanced':
                $maxProducts = 30;
                break;
            case 'Administrador':
            case 'Premium':
                $maxProducts = PHP_INT_MAX; // Sin límites
                break;
            default:
                $maxProducts = 20; // Valor por defecto en caso de rol desconocido
                break;
        }
    
        if ($existingProducts >= $maxProducts) {
            return redirect()->back()->with('error', 'Su usuario ha alcanzado el límite máximo de productos.<br><a href="' . base_url('/pricing') . '">Encuentra aquí un plan que se ajuste mejor a tus necesidades.</a>');
        }
    
        // Paso las secciones a la vista
        $data = [
            'title' => 'Crear un nuevo producto',
            'secciones' => $seccionesUsuario // Pasa solo las secciones del usuario actual a la vista
        ];
    
        // Chequear las validaciones del formulario de crear.
        if (! $this->validate([
            'nombreProducto' => 'required|max_length[50]|min_length[2]',
            'descripcion'  => 'required|max_length[250]|min_length[5]',
            'id_seccion'  => 'required', // Viene de la vista createProduct, del: select name="id_seccion";
            'stock' =>'min_length[0]',
            'guardado_en' => 'max_length[50]|min_length[0]',
            'precio_compra' => 'min_length[0]',
            'precio_venta' => 'min_length[0]',
            'fecha_compra' => 'permit_empty|valid_date', // Permite que sea opcional y valida si es una fecha válida si se proporciona
            'fecha_venta' => 'permit_empty|valid_date',
            'imagen' => 'permit_empty|uploaded[imagen]|max_size[imagen,50000]|is_image[imagen]',
            'documentos' => 'max_size[documentos,50000]'
        ])) {
            // Falla la validación, volvemos al formulario.
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        }
    
        // Recoge los datos ya validados en la variable $post.
        $post = $this->validator->getValidated();
    
        // Manejo de la imagen
        $fotoName = null;
        if ($foto = $this->request->getFile('imagen')) { // Comprobación para que no salte error si no subimos imagen
            if ($foto->isValid() && !$foto->hasMoved()) {
                $fotoName = $foto->getName();
                $foto->move(ROOTPATH . 'public/images/imgPrivate', $fotoName);
            }
        }
        $documentoName = null;
        if ($doc = $this->request->getFile('documentos')) {
            if ($doc->isValid() && !$doc->hasMoved()) {
                $documentoName = $doc->getName();
                $doc->move(ROOTPATH . 'public/documents', $documentoName);
            }
        }
    
        $model = model(ProductModel::class);
        if ($model->save([
            'nombreProducto' => $post['nombreProducto'],
            'slug' => url_title($post['nombreProducto'], '-', true),
            'descripcion' => $post['descripcion'],
            'id_seccion' => $post['id_seccion'],
            'guardado_en' => $post['guardado_en'],
            'stock' => $post['stock'],
            'precio_compra' => $post['precio_compra'],
            'precio_venta' => $post['precio_venta'],
            'fecha_compra' => $post['fecha_compra'],
            'fecha_venta' => $post['fecha_venta'],
            'imagen' => $fotoName,
            'documentos' => $documentoName,
        ])) {
            // Redirigir al usuario al listado de secciones
            return redirect()->to(base_url('products'))->with('success', 'Producto creado con éxito');
        } else {
            // Si la creación falla, redirigir de nuevo al formulario de creación con un mensaje de error
            return redirect()->back()->with('error', 'No se pudo crear el producto');
        }
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
        // Intentar eliminar la sección
        if ($model->delete($id)) {
            return redirect()->to(base_url('products'))->with('success', 'Producto eliminado con éxito');
        } else {
            return redirect()->back()->with('error', 'No se pudo eliminar el producto');
        }
        /*return view('templates/menuHeader', ['title'=> 'Delete item'])
            . view('Products/delete')
            . view('templates/footer');*/
    }

    public function update($id)
    {
        helper('form');
        $session = session();
        $userId = $session->get('user_id');
    
        if ($id == null) {
            throw new PageNotFoundException('No se puede actualizar el producto');
        }
    
        $model = model(ProductModel::class);
        $sectionModel = model(SeccionesModel::class);
    
        // Buscar el producto por ID y verificar que pertenece a una sección del usuario actual
        $product = $model->where(['id' => $id])->first();
        $section = $sectionModel->where(['id' => $product['id_seccion'], 'id_usuario' => $userId])->first();
    
        if ($product && $section) {
            $data = [
                'products' => $product,
                'title' => 'Actualizar ',
                'sections' => $sectionModel->where('id_usuario', $userId)->findAll(), // Filtra las secciones del usuario actual
                'imagen' => 'Imagen',
                'documentos' => 'Documentos'
            ];
        } else {
            throw new PageNotFoundException('El producto seleccionado no existe o no pertenece a una sección del usuario.');
        }
    
        return view('templates/menuHeader', $data)
            . view('Products/update')
            . view('templates/footer');
    }
    
    
    public function updatedItem($id) {
        helper('form');
    
        // Define las reglas de validación
        $validationRules = [
            'nombreProducto' => 'required|max_length[50]|min_length[2]',
            'descripcion' => 'required|max_length[250]|min_length[5]',
            'id_seccion' => 'required',
            'stock' => 'permit_empty|integer',
            'guardado_en' => 'permit_empty|max_length[50]',
            'precio_compra' => 'permit_empty|decimal',
            'precio_venta' => 'permit_empty|decimal',
            'fecha_compra' => 'permit_empty|valid_date',
            'fecha_venta' => 'permit_empty|valid_date',
            'imagen' => 'permit_empty|max_size[imagen,50000]|is_image[imagen]|mime_in[imagen,image/jpg,image/jpeg,image/png]',
            'documentos' => 'permit_empty|uploaded[documentos]|max_size[documentos,50000]|ext_in[documentos,pdf,doc,docx]',
        ];
    
        // Checks whether the submitted data passed the validation rules.
        if (!$this->validate($validationRules)) {
            // The validation fails, so returns the form with errors.
            $errors = $this->validator->getErrors();
            $model = model(ProductModel::class);
            $Sectionmodel = model(SeccionesModel::class);
            $data = [
                'products' => $model->where(['id' => $id])->first(),
                'title' => 'Actualizar ',
                'sections' => $Sectionmodel->findAll(),
                'errors' => $errors, // Pass errors to the view
            ];
            return view('templates/menuHeader', $data)
                . view('Products/update')
                . view('templates/footer');
        }
    
        // Gets the validated data.
        $post = $this->request->getPost();
    
        // Prepare the data array with optional fields checked
        $data = [
            'id' => $id,
            'nombreProducto' => $post['nombreProducto'],
            'slug' => url_title($post['nombreProducto'], '-', true),
            'descripcion' => $post['descripcion'],
            'id_seccion' => $post['id_seccion'],
            'guardado_en' => $post['guardado_en'] ?? null,
            'stock' => $post['stock'] ?? null,
            'precio_compra' => $post['precio_compra'] ?? null,
            'precio_venta' => $post['precio_venta'] ?? null,
            'fecha_compra' => $post['fecha_compra'] ?? null,
            'fecha_venta' => $post['fecha_venta'] ?? null,
        ];
    
        // Manejar la imagen si es cargada
        $foto = $this->request->getFile('imagen');
        if ($foto && $foto->isValid()) {
            $fotoName = $foto->getName();
            $foto->move(ROOTPATH . 'public/images/imgPrivate', $fotoName);
            $data['imagen'] = $fotoName;
        }
        $doc = $this->request->getFile('documentos');
        if ($doc && $doc->isValid()) {
            $documentoName = $doc->getName();
            $doc->move(ROOTPATH . 'public/documents', $documentoName);
            $data['documentos'] = $documentoName;
        }
    
        $model = model(ProductModel::class);
        if ($model->update($id, $data)) {
            return redirect()->to(base_url('products'))->with('success', 'Producto con éxito');
        } else {
            return redirect()->back()->with('error', 'No se pudo actualizar el producto');
        }
        /*$model->save($data);
    
        return view('templates/menuHeader', ['title' => 'Item updated'])
            . view('Products/success')
            . view('templates/footer');*/
    }    
    
}