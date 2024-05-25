<?php
namespace App\Controllers;

use App\Models\SeccionesModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Secciones extends BaseController
{
    public function __construct()
    {
        // Agregar esto para asegurarse de que el usuario esté logueado antes de acceder a los métodos del controlador
        if (!session()->get('user_id')) {
            redirect()->to(base_url('login')); // Redirigir al usuario a la página de inicio de sesión si no está logueado
        }
    }


    public function new()
    {
        helper('form');

        $model = model(SeccionesModel::class);
        $data['users'] = $model->getSecciones(); // Cambiado 'user' a 'users'

        if (!empty($data['users'])) {
            return view('templates/menuHeader', ['title' => 'Crea tu sección del hogar'])
                . view('secciones/createSection', $data)
                . view('templates/footer');
        } else {
            return view('templates/menuHeader', ['title' => 'Crea tu sección del hogar'])
                . view('secciones/createSection')
                . view('templates/footer');
        }
    }


    public function index() // Para ver las secciones que hay en la BBDD
    {
        $model = model(SeccionesModel::class);
        $data = [
            'secciones'  => $model->getSecciones(), // este secciones es muy importante porque es el que luego tendremos como $variable en la vista de secciones en el index.php
            'title' => 'Listado de secciones',
            'model' => $model // Pasar el modelo a la vista
        ];

        return view('templates/menuHeader', $data)
            . view('secciones/index')
            . view('templates/footer');
    }

    public function show($id = null){ //Para ver una sección en especifico
        $model = model(SeccionesModel::class);
        $secciones = $model->getById($id);
    
        if (empty($secciones)) {
            throw new PageNotFoundException('No se puede encontrar el secciones');
        }
    
        $data = [
            'secciones' => $secciones,
            'model' => $model // Pasar el modelo a la vista
        ];

        return view('templates/menuHeader', $data)
            . view('secciones/view')
            . view('templates/footer'); 
    }

    public function noSession()
    {

        return view('templates/menuHeader')
            . view('secciones/noSession')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');
        $session = session();
        $userId = $session->get('user_id');
        $userRole = $session->get('user_role');

        $seccionModel = new SeccionesModel();
        $existingSecciones = $seccionModel->where('id_usuario', $userId)->countAllResults();

        // Límites de secciones según el rol del usuario
        switch ($userRole) {
            case 'Basico':
                $maxSecciones = 2;
                break;
            case 'Limitado':
                $maxSecciones = 5;
                break;
            case 'Administrador':
            case 'Premium':
                $maxSecciones = PHP_INT_MAX; // Sin límites
                break;
            default:
                $maxSecciones = 2; // Valor por defecto en caso de rol desconocido
                break;
        }

        if ($existingSecciones >= $maxSecciones) {
            return redirect()->back()->with('error', 'Su usuario ha alcanzalo el límite máximo de secciones.');
        }

        $data = $this->request->getPost(['nombre_seccion', 'imagen']);

        if (! $this->validate([
            'nombre_seccion' => 'required|max_length[50]|min_length[2]',
            'imagen' => 'max_size[imagen,50000]',
        ])) {
            return $this->new();
        }

        $post = $this->validator->getValidated();
        $foto = $this->request->getFile('imagen');
        $fotoName = $foto->getName();
        $foto->move(ROOTPATH . 'public/images/imgPrivate', $fotoName);

        $model = model(SeccionesModel::class);
        $model->save([
            'nombre_seccion' => $post['nombre_seccion'],
            'imagen' => $fotoName,
            'id_usuario' => $userId,
        ]);

        return view('templates/menuHeader', ['title' => 'Crear sección'])
            . view('secciones/success')
            . view('templates/footer');
    }


    public function delete($id){//le pasamos como identificador la variable id
        if ($id==null){
            throw new PageNotFoundException('No se puede borrar la sección');
        }

        //si no es null:
        $model = model(SeccionesModel::class);

        if ($model ->getById($id)) {
            if ($model ->delete($id)){
                //return redirect()->to(base_url(''));

            }
        }else{
            throw new PageNotFoundException('La sección seleccionada no existe');
        }// y si no hay noticia con ID, sacamos otro mensaje.

        /*Nos vamos directamente a la pag. principal*/

        
        return view('templates/menuHeader', ['title'=> 'Deleted section'])
            . view('secciones/delete')
            . view('templates/footer');
    }

    public function update($id){//le pasamos como identificador la variable id y abajo hace falta el helper form

        helper('form');

        if ($id==null){
            throw new PageNotFoundException('Cannot update the section');
        }

        //si no es null:
        $model = model(SeccionesModel::class);

        if ($model->where('id', $id)->find()) {//busca la noticia del id
            $data = [
                'sections' => $model ->where(['id' => $id])->first(),
                'nombre_seccion' => 'Update section', 
                'imagen' => 'Imagen'
            ];

        }else{
            throw new PageNotFoundException('Selected section does not exist in database');
        }// y si no hay noticia con ID, sacamos otro mensaje.


        return view('templates/menuHeader', $data)
            . view('secciones/update')
            . view('templates/footer');
    }

    public function updatedSection($id)
    {
        helper('form');
 
        // Checks whether the submitted data passed the validation rules.
        if (! $this->validate([
            'nombre_seccion' => 'required|max_length[100]|min_length[2]',
            //'imagen' => 'uploaded[imagen]|max_size[imagen,50000]'
        ])) {
            // The validation fails, so returns the form.
            return $this->update($id);
        }
 
        // Gets the validated data.
        $post = $this->validator->getValidated();
 
        $data = [
            'id' => $id,
            'nombre_seccion' => $post['nombre_seccion'],
            //'imagen' => $post['imagen'],
        ];
        $model = model(SeccionesModel::class);
        $model->save($data);

        return view('templates/menuHeader', ['title' => 'Item updated'])
            . view('secciones/success')
            . view('templates/footer');
    }

}

