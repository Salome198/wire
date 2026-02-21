<?php

namespace App\Models;

use CodeIgniter\Model;

class usermodel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'password_hash',
        'profile_image',
        'created_at'
    ];

    protected $useTimestamps = false; // we use created_at default in SQL
}
