<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMember extends Model
{
    protected $table = 'member';
    protected $allowedFields = ['member_id', 'member_username', 'member_password'];

    function insertdata($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
