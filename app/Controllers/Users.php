<?php
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SeccionesModel;
use App\Models\ProductModel;

use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    public function loginForm($error = null)
    {
        helper('form');
        if ($error == null){
            return view('templates/menuHeader', ['title' => 'Acceso al área privada 1'])
            . view('users/login',['error' => ''])
            . view('templates/footer');
        }else{
            return view('templates/menuHeader', ['title' => 'Acceso al área privada 2']) // Este campo luego va al login.php en la variable title
                . view('users/login',  ['error' => 'Credenciales incorrectas'])
                . view('templates/footer');
        }
    }

    public function checkUser()
    {
        helper('form');

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validate([
            'username' => 'required|max_length[255]|min_length[4]',
            'password'  => 'required|max_length[5000]|min_length[4]',
        ])) {
            // The validation fails, so returns the form.
            return $this->loginForm();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();

        $model = model(UserModel::class);
        if($data['user'] = $model->checkUser($post['username'],$post['password'])){
            
            $session = session(); // Ininializar la sesión como con el session_start();
            $session->set('user_id',$data['user']['id'] ); 
            $session->set('user',$post['username']); 

            //Poder mostrar secciones y productos en la parte del admin
            $model_secciones = model(SeccionesModel::class);
            $data['secciones'] = $model_secciones->getSecciones();

            $model_products = model(ProductModel::class);
            $data['products'] = $model_products->getProducts();

            // Aquí pasamos el modelo a la vista
            $data['model'] = $model;

            return view('templates/menuHeader', ['title' => 'Backend'])
                . view('users/admin', $data)
                . view('templates/footer');
        } else {
            return $this->loginForm("Error");
        }
    }

    

    public function closeSession()
    {
        $session = session();
        // eliminar variable de sesion específica
        $session->remove('user');
        // eliminar toda la información de la sesion
        $session->destroy(); //Esta porque me cerraría todas las sesiones del sistema.

        return redirect()->to(base_url());
    }

    /*public function registrarUsuario() {
        // Obtener los datos del formulario
        $nombre = $this->input->post('nombre');
        $correo = $this->input->post('correo');
        $contraseña = $this->input->post('contraseña');
        $rol = 'Basico'; // Asignar el rol por defecto
    
        // Cifrar la contraseña
        $contraseñaCifrada = password_hash($contraseña, PASSWORD_DEFAULT);
    
        // Insertar el usuario en la base de datos
        $data = array(
            'nombre' => $nombre,
            'correo' => $correo,
            'contraseña' => $contraseñaCifrada,
            'rol' => $rol
        );
    
        // Insertar en la base de datos
        $this->db->insert('Usuarios', $data);
    
        // Redirigir u mostrar un mensaje de éxito, etc.
    }*/
    
    
   
}

