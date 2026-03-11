<?php

namespace App\Models;

use CodeIgniter\Model;

class DeadlineModel extends Model
{
    protected $table = 'deadlines';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'title',
        'module_name',
        'due_date',
        'description',
        'created_at'
    ];

    protected $useTimestamps = false;
}