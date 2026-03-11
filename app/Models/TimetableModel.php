<?php

namespace App\Models;

use CodeIgniter\Model;

class TimetableModel extends Model
{
    protected $table = 'timetable_items';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'module_name',
        'day_of_week',
        'start_time',
        'end_time',
        'location',
        'created_at'
    ];

    protected $useTimestamps = false;
}