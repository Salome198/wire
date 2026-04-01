<?php

namespace App\Models;

use CodeIgniter\Model;

class ResourceModel extends Model
{
    protected $table = 'resources';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'title',
        'category',
        'link',
        'description',
        'created_at'
    ];

    protected $useTimestamps = false;
}