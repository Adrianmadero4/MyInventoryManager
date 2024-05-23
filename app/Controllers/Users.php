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
            return view('templates/menuHeader', ['title' => 'Acceso al área privada'])
            . view('users/login',['error' => ''])
            . view('templates/footer');
        }else{
            return view('templates/menuHeader', ['title' => 'Acceso al área privada']) // Este campo luego va al login.php en la variable title
                . view('users/login',  ['error' => 'Credenciales incorrectas'])
                . view('templates/footer');
        }
    }

    public function checkUser()
    {
        // Inicializar la sesión
        $session = session(); // Ininializar la sesión como con el session_start();

        // Comprobar si el usuario ya ha iniciado sesión
        if ($session->get('user_id') !== null) {
            // Si el usuario ya ha iniciado sesión, lo redirige a la página de inicio.
            $model = model(UserModel::class);
            $data['user'] = $model->getById($session->get('user_id'));
            $data['model'] = $model;

            // Poder mostrar secciones y productos en la parte del admin
            $model_secciones = model(SeccionesModel::class);
            $data['secciones'] = $model_secciones->getSecciones();

            $model_products = model(ProductModel::class);
            $data['products'] = $model_products->getProducts();

            return view('templates/menuHeader', ['title' => 'Backend'])
                . view('users/admin', $data)
                . view('templates/footer');
        }

        // Caso contrario, muestra el formulario de inicio de sesión.
        helper('form');
        // Checks whether the submitted data passed the validation rules.
        if (!$this->validate([
            'username' => 'required|max_length[255]|min_length[4]',
            'password' => 'required|max_length[5000]|min_length[4]',
        ])) {
            // The validation fails, so returns the form.
            return $this->loginForm();
        }

        // Gets the validated data.
        $post = $this->validator->getValidated();
        $model = model(UserModel::class);
        if ($data['user'] = $model->checkUser($post['username'], $post['password'])) {

            $session = session(); // Ininializar la sesión como con el session_start();
            $session->set('user_id', $data['user']['id']);
            $session->set('user', $post['username']);

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

    public function registerForm()
{
    helper('form');
    return view('templates/menuHeader', ['title' => 'Registro de usuario'])
        . view('users/register', ['error' => ''])
        . view('templates/footer');
}

    public function register()
    {
        helper('form');

        // Chequea si los datos enviados pasan las reglas de validación.
        if (! $this->validate([
            'username' => 'required|max_length[255]|min_length[4]',
            'email' => 'required|valid_email|max_length[255]|is_unique[usuarios.email]',
            'password'  => 'required|max_length[5000]|min_length[4]',
        ])) {
            // La validación falla, devuelve el formulario.
            return $this->registerForm();
        }

        // Obtiene los datos validados.
        $post = $this->request->getPost(['username', 'email', 'password']);

        // Define el rol predeterminado como "básico"
        $post['rol'] = 'básico';

        // Guarda el usuario en la base de datos.
        $model = model(UserModel::class);
        $model->save($post);

        // Redirige al usuario a la página de inicio de sesión.
        return view('templates/menuHeader', ['title' => 'Create a new User'])
            . view('users/success')
            . view('templates/footer');
    }

    
    

}

