<?php namespace App\Models; //Ojo que el <?php tiene que ser si o si la primer linea o da error
// Creamos un modelo porque necesitamos acceder a la tabla de secciones para el desplegable, que aparezcan las secciones


use CodeIgniter\Model;

class SeccionesModel extends Model
{
    protected $table = 'secciones';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre_seccion', 'id_usuario', 'imagen', 'created_at', 'updated_at']; // Todos los campos editables

    public function getSecciones()
    {
        $session = session(); // Ininializar la sesión como con el session_start();
        $user = $session->get('user_id');
        return $this->where('id_usuario', $user)->findAll();
    }

    public function getById($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_usuario' => $id])->first();
    }

    public function getImagenRuta($id)
    {
        $seccion = $this->find($id);
        if (!$seccion) {
            return null; // o una ruta predeterminada si prefieres
        }
        return base_url('public/images/imgPrivate/' . $seccion['imagen']);
    }

}

