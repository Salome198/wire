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

        if (session()->get('role') !== 'student') {
            return redirect()->to('/admin');
        }

        $this->trackFeatureUsage('timetable');

        $model = new TimetableModel();

        $items = $model->where('user_id', session()->get('user_id'))
                       ->orderBy('day_of_week', 'ASC')
                       ->orderBy('start_time', 'ASC')
                       ->findAll();

        return view('students/timetable', [
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

    public function apiList()
    {
        $userId = $this->request->getGet('user_id');

        $model = new TimetableModel();

        $items = $model->where('user_id', $userId)
                       ->orderBy('day_of_week', 'ASC')
                       ->orderBy('start_time', 'ASC')
                       ->findAll();

        return $this->response->setJSON([
            'status' => 'success',
            'items' => $items
        ]);
    }

    public function apiDelete()
{
    $id = $this->request->getPost('id');
    $userId = $this->request->getPost('user_id');

    if (!$id || !$userId) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Missing timetable item.'
        ]);
    }

    $model = new TimetableModel();

    $model->where('id', $id)
          ->where('user_id', $userId)
          ->delete();

    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Timetable item deleted.'
    ]);
}

    public function apiCreate()
    {
        $model = new TimetableModel();

        $model->insert([
            'user_id'     => $this->request->getPost('user_id'),
            'module_name' => $this->request->getPost('module_name'),
            'day_of_week' => $this->request->getPost('day_of_week'),
            'start_time'  => $this->request->getPost('start_time'),
            'end_time'    => $this->request->getPost('end_time'),
            'location'    => $this->request->getPost('location'),
        ]);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Timetable item added'
        ]);
    }
}