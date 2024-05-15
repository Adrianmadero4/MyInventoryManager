<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'usuarios';
    protected $allowedFields = ['username', 'email', 'password','rol'];

    public function checkUser($user,$pass)
    {
        return $this->where(['username' => $user,'password'=>$pass])->first();

    }
    /*public function checkUserHash($user,$pass)
    {
        $user = $this->where(['username' => $user])->first();
        $userPasswordHash = $user['password'];

        if(password_verify($pass, $userPasswordHash)) {
            return $user;
        }

        return false;
    }*/
    public function getById($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

}
