<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table            = 'testimoni';
    protected $allowedFields    = ['id', 'id_user', 'description', 'rating'];

    function getTestimonis()
    {
        return $this->select('username, rating, description')->join('users', 'users.id = testimoni.id_user')->findAll();
    }
}
