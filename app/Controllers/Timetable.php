<?php

namespace App\Controllers;

use App\Models\TimetableModel;

class Timetable extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new TimetableModel();

        $items = $model->where('user_id', session()->get('user_id'))
                       ->orderBy('day_of_week', 'ASC')
                       ->findAll();

        return view('student/timetable', [
            'title' => 'Wire | Timetable',
            'items' => $items
        ]);
    }

    public function create()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new TimetableModel();

        $model->insert([
            'user_id'     => session()->get('user_id'),
            'module_name' => $this->request->getPost('module_name'),
            'day_of_week' => $this->request->getPost('day_of_week'),
            'start_time'  => $this->request->getPost('start_time'),
            'end_time'    => $this->request->getPost('end_time'),
            'location'    => $this->request->getPost('location'),
        ]);

        return redirect()->to('/timetable')->with('success', 'Timetable item added.');
    }
}