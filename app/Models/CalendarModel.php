<?php

namespace App\Models;

use CodeIgniter\Model;

class CalendarModel extends Model
{
    protected $table = 'calendar_items';
    protected $primaryKey = 'id';

    public function getCalendarItems($user_id)
    {
        return $this->where('user_id', $user_id)
                    ->orderBy('start_datetime', 'ASC')
                    ->findAll();
    }
}