<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'productos'; //Accedemos a la tabla
    protected $primaryKey = 'id';// Variable para la primary_key
    protected $allowedFields = ['id_seccion', 'nombreProducto', 'slug', 'codigo', 'descripcion', 'stock', 'guardado_en', 'precio_compra', 'precio_venta',' fecha_compra', 'fecha_venta', 'imagen', 'documentos'];//Campos permitidos para actualizar.

    public function getProducts($slug = false)
    {
        if ($slug === false) {
            $sql = $this->select('productos.*, secciones.nombre_seccion');
            $sql = $this->join('secciones', 'productos.id_seccion = secciones.id');
            $sql = $this->findAll();
            return $sql;
        } // Abajo para un producto en particular.
        $sql = $this->select('productos.*, secciones.nombre_seccion');
        $sql = $this->join('secciones', 'productos.id_seccion = secciones.id'); // Esto es como si fuera el JOIN .. ON que hacíamos en php
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
    public function getById($id)
    {
        return $this->where(['id' => $id])->first();
    }*/

    /*
    public function getProducts($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }*/

}
