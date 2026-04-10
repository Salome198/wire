<?php

namespace App\Controllers;

use App\Models\CalendarModel;

class Calendar extends BaseController
{
    public function index()
    {
        $model = new CalendarModel();

        $user_id = session()->get('user_id') ?? 1;

        $data['calendarItems'] = $model->getCalendarItems($user_id);

        return view('calendar/index', $data);
    }
}