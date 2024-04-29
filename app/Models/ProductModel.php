<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products'; //Accedemos a la tabla
    protected $primaryKey = 'id';// Variable para la primary_key
    protected $allowedFields = ['id_categoria', 'nombreProducto', 'slug', 'codigo', 'descripcion', 'stock', 'precio_compra', 'precio_venta',' fecha_compra', 'fecha_venta', 'imagen'];//Campos permitidos para actualizar.

    public function getProducts($slug = false)
    {
        if ($slug === false) {
            $sql = $this->select('products.*,category.category');
            $sql = $this->join('category', 'products.id_categoria = category.id');
            $sql = $this->findAll();
            return $sql;
        }
        $sql = $this->select('products.*,category.category');
        $sql = $this->join('category', 'products.id_categoria = category.id');
        $sql = $this->where(['slug' => $slug]);
        $sql = $this->first();
        return $sql;
    }
    public function getById($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    /*
    public function getProducts($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }*/

}
