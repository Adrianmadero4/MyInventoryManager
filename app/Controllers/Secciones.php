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
            return redirect()->back()->with('error', 'Su usuario ha alcanzado el límite máximo de secciones.<br><a href="' . base_url('/pricing') . '">Encuentra aquí un plan que se ajuste mejor a tus necesidades.</a>');

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
        if ($model->save([
            'nombre_seccion' => $post['nombre_seccion'],
            'imagen' => $fotoName,
            'id_usuario' => $userId,
        ])) {
            // Redirigir al usuario al listado de secciones
            return redirect()->to(base_url('secciones'))->with('success', 'Sección creada con éxito');
        } else {
            // Si la creación falla, redirigir de nuevo al formulario de creación con un mensaje de error
            return redirect()->back()->with('error', 'No se pudo crear la sección');
        }
        /* Modelo con succes, pero mejor que redirija automáticamente
        $model->save([
            'nombre_seccion' => $post['nombre_seccion'],
            'imagen' => $fotoName,
            'id_usuario' => $userId,
        ]);

        return view('templates/menuHeader', ['title' => 'Crear sección'])
            . view('secciones/success')
            . view('templates/footer');*/
    }


    public function delete($id)
    {
        // Verificar si el ID es nulo
        if ($id == null) {
            throw new PageNotFoundException('No se puede borrar la sección');
        }
    
        // Obtener el modelo
        $model = model(SeccionesModel::class);
    
        // Verificar si la sección existe
        $seccion = $model->find($id);
        if (!$seccion) {
            throw new PageNotFoundException('La sección seleccionada no existe');
        }
    
        // Intentar eliminar la sección
        if ($model->delete($id)) {
            return redirect()->to(base_url('secciones'))->with('success', 'Sección eliminada con éxito');
        } else {
            return redirect()->back()->with('error', 'No se pudo eliminar la sección');
        }
    }
    

    public function update($id)
    {
        helper('form');
    
        if ($id == null) {
            throw new PageNotFoundException('Cannot update the section');
        }
    
        // Buscar la sección por ID
        $model = model(SeccionesModel::class);
    
        if ($model->where('id', $id)->find()) {
            $data = [
                'sections' => $model->where(['id' => $id])->first(),
                'nombre_seccion' => 'Update section',
                'imagen' => 'Imagen'
            ];
        } else {
            throw new PageNotFoundException('Selected section does not exist in database');
        }
    
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
            'imagen' => 'max_size[imagen,50000]' // Verifica el tamaño de la imagen
        ])) {
            // The validation fails, so returns the form.
            return $this->update($id);
        }
     
        // Gets the validated data.
        $post = $this->validator->getValidated();
    
        $data = [
            'id' => $id,
            'nombre_seccion' => $post['nombre_seccion'],
        ];
    
        // Manejar la imagen si es cargada
        $foto = $this->request->getFile('imagen');
        if ($foto && $foto->isValid()) {
            $fotoName = $foto->getName();
            $foto->move(ROOTPATH . 'public/images/imgPrivate', $fotoName);
            $data['imagen'] = $fotoName;
        }
    
        $model = model(SeccionesModel::class);
        if ($model->update($id, $data)) {
            return redirect()->to(base_url('secciones'))->with('success', 'Sección actualizada con éxito');
        } else {
            return redirect()->back()->with('error', 'No se pudo actualizar la sección');
        }
        /* Con el success, pero mejor que me redirija sin avisar.
        $model = model(SeccionesModel::class);
        $model->save($data);
    
        return view('templates/menuHeader', ['title' => 'Item updated'])
            . view('secciones/success')
            . view('templates/footer');*/ 
    }
     

}

