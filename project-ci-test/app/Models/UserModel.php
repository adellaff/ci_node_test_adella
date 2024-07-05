<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'password', 'role_id'];
    protected $useTimestamps = true;

    public function getRole()
    {
        return $this->belongsTo(RoleModel::class, 'role_id', 'id');
    }
}


?>
