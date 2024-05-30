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
    
        // Obtener las secciones del usuario actual
        $secciones = $this->db->table('secciones')
                              ->select('id')
                              ->where('id_usuario', $user)
                              ->get()
                              ->getResultArray();
    
        // Extraer los ids de las secciones
        $seccionesIds = array_column($secciones, 'id');
    
        // Verificar si hay secciones disponibles
        if (empty($seccionesIds)) {
            return []; // No hay secciones para este usuario, por lo que no hay productos que mostrar
        }
    
        if ($slug === false) {
            return $this->select('productos.*, secciones.nombre_seccion')
                        ->join('secciones', 'productos.id_seccion = secciones.id')
                        ->whereIn('productos.id_seccion', $seccionesIds)
                        ->findAll();
        }
    
        return $this->select('productos.*, secciones.nombre_seccion')
                    ->join('secciones', 'productos.id_seccion = secciones.id')
                    ->where('productos.slug', $slug)
                    ->whereIn('productos.id_seccion', $seccionesIds)
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
