<?php

namespace App\Models;

use CodeIgniter\Model;

class SupportModel extends Model
{
    protected $table = 'support_items';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'support_type',
        'organisation',
        'contact_info',
        'link',
        'notes',
        'created_at'
    ];

    protected $useTimestamps = false;
}