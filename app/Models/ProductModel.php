<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'productos'; // Accedemos a la tabla
    protected $primaryKey = 'id'; // Variable para la primary_key

    // En el allowedfields van todos los campos que puedan ser editables.
    protected $allowedFields = [
        'id_seccion', 
        'nombreProducto', 
        'slug', 
        'codigo', 
        'descripcion', 
        'stock', 
        'guardado_en', 
        'precio_compra', 
        'precio_venta', 
        'fecha_compra', 
        'fecha_venta', 
        'imagen', 
        'documentos', 
        'created_at', 
        'updated_at'
    ]; // Campos permitidos para actualizar.

    public function getProducts($slug = false)
    {
        $session = session();
        $user = $session->get('user_id');

        if ($slug === false) {
            return $this->select('productos.*, secciones.nombre_seccion')
                        ->join('secciones', 'productos.id_seccion = secciones.id')
                        ->where('secciones.id_usuario', $user)
                        ->findAll();
        }

        return $this->select('productos.*, secciones.nombre_seccion')
                    ->join('secciones', 'productos.id_seccion = secciones.id')
                    ->where(['slug' => $slug, 'secciones.id_usuario' => $user])
                    ->first();
    }

    public function getById($id)
    {
        return $this->find($id);
    }



    public function getImagenRuta($id)
    {
        $product = $this->find($id);
        if (!$product) {
            return null; // o una ruta predeterminada si prefieres
        }
        return base_url('public/images/imgPrivate/' . $product['imagen']);
    }
}
