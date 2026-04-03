<?php

namespace App\Models;

use CodeIgniter\Model;

class FeatureUsageModel extends Model
{
    protected $table = 'feature_usage';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'feature_name',
        'used_at'
    ];

    protected $useTimestamps = false;
}