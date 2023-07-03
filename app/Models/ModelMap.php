<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMap extends Model
{
    protected $table = 'spbu';
    protected $allowedFields = ['id', 'nama', 'alamat', 'lat', 'long'];

    function insertdata($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
