<?php namespace App\Models;
      use CodeIgniter\Model;

      class Usuarios extends Model{
        public function obtenerUsuario($data){
            $usuario = $this-> db-> table('t_usuarios');
            $usuario->where($data);//usuario where ususario = usuario. Entonces aqui va el usuarios que nos hayan mandado por post.
            return $usuario -> get() -> getResultArray();
        }
      }