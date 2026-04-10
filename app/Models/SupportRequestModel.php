<?php

namespace App\Models;

use CodeIgniter\Model;

class SupportRequestModel extends Model
{
    protected $table = 'support_requests';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'name',
        'email',
        'message',
        'created_at'
    ];

    protected $useTimestamps = false;
}