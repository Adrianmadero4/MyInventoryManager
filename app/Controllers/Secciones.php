<?php
namespace App\Controllers;

use App\Models\SeccionesModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Secciones extends BaseController
{
    public function index() // Para ver las secciones que hay en la BBDD
    {
        $model = model(SeccionesModel::class);
        $data = [
            'secciones'  => $model->getSecciones(), // este secciones es muy importante porque es el que luego tendremos como $variable en la vista de secciones en el index.php
            'title' => 'Listado de secciones',
        ];

        return view('templates/menuHeader', $data)
            . view('secciones/index')
            . view('templates/footer');
    }

    public function show($id = null){ //Para ver una sección en especifico
        $model = model(SeccionesModel::class);
    
        $secciones = $model->getById($id);
    
        if (empty($secciones)) {
            throw new PageNotFoundException('No se puede encontrar el producto');
        }
    
        $data['secciones'] = $secciones;
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

    public function new() //Método para insertar datos en el formulario, llamando a createProduct.php
    {
        helper('form');

        return view('templates/menuHeader', ['title' => 'Crea tu sección del hogar'] ) //El 'titulo' va luego al createProduct.php en las vistas
            . view('secciones/createSection')
            . view('templates/footer');
    }

    public function create() //Método que recoge los datos del formulario del new al haber insertado la seccion.

    {
        helper('form'); // Ayuda para validar los datos.

        $data = $this->request->getPost(['nombre_seccion', 'imagen']);

        // Chequear las validaciones del formulario de crear.
        if (! $this->validate ([
            'nombre_seccion' => 'required|max_length[50]|min_length[2]',
            'imagen' => 'max_size[imagen,50000]',
        ])) {
            // Falla la validación, volvemos al formulario.
            return $this->new();
        }

        // Recoge los datos ya validados en la variable $post.
        $post = $this->validator->getValidated();

        $foto = $this->request->getFile('imagen');
        $fotoName = $foto->getName();
        $foto->move(ROOTPATH . 'public/images/imgPrivate',$fotoName);

        $model = model(SeccionesModel::class);

        $model->save([ //Esto es como el insert into
            'nombre_seccion' => $post['nombre_seccion'], //Esto viene del name del input en el formulario
            'imagen'  => $fotoName,
        ]);

        return view('templates/menuHeader', ['title' => 'Create a news item'])
            . view('secciones/success')
            . view('templates/footer');
    }

    public function delete($id){//le pasamos como identificador la variable id
        if ($id==null){
            throw new PageNotFoundException('No se puede borrar la sección');
        }

        //si no es null:
        $model = model(SeccionesModel::class);

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
            throw new PageNotFoundException('La sección seleccionada no existe');
        }// y si no hay noticia con ID, sacamos otro mensaje.

        /*Nos vamos directamente a la pag. principal*/

        
        return view('templates/menuHeader', ['title'=> 'Deleted section'])
            . view('secciones/delete')
            . view('templates/footer');
    }

}

