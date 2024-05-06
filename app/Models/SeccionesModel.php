<?php

namespace App\Models;

use CodeIgniter\Model;

class SeccionesModel extends Model
{
    protected $table = 'secciones';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre_seccion', 'id_usuario', 'imagen', 'created_at', 'updated_at'];

    public function getSecciones()
    {
        return $this->findAll();
    }
    public function getById($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

}
