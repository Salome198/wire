<?php

namespace App\Models;

use CodeIgniter\Model;

class ReminderModel extends Model
{
    protected $table = 'reminders';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'title',
        'description',
        'reminder_date',
        'reminder_time',
        'created_at'
    ];

    protected $useTimestamps = false;
}