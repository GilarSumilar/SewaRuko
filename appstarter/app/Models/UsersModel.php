<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table            = 'users';
    protected $allowedFields    = ['id', 'username', 'password', 'email', 'no_hp'];

    public function getUsers($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where('id', $id);
    }
}
