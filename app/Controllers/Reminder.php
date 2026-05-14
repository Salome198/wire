<?php

namespace App\Controllers;

use App\Models\ReminderModel;

class Reminder extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'student') {
            return redirect()->to('/admin');
        }

        $this->trackFeatureUsage('reminders');

        $model = new ReminderModel();

        $reminders = $model->where('user_id', session()->get('user_id'))
                           ->orderBy('reminder_date', 'ASC')
                           ->orderBy('reminder_time', 'ASC')
                           ->findAll();

        return view('students/reminders', [
            'title' => 'Wire | Reminders',
            'reminders' => $reminders
        ]);
    }

    public function create()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new ReminderModel();

        $model->insert([
            'user_id'       => session()->get('user_id'),
            'title'         => $this->request->getPost('title'),
            'description'   => $this->request->getPost('description'),
            'reminder_date' => $this->request->getPost('reminder_date'),
            'reminder_time' => $this->request->getPost('reminder_time'),
        ]);

        return redirect()->to('/reminders')->with('success', 'Reminder created.');
    }

    public function apiList()
    {
        $userId = $this->request->getGet('user_id');

        $model = new ReminderModel();

        $reminders = $model->where('user_id', $userId)
                           ->orderBy('reminder_date', 'ASC')
                           ->orderBy('reminder_time', 'ASC')
                           ->findAll();

        return $this->response->setJSON([
            'status' => 'success',
            'items' => $reminders
        ]);
    }

    public function apiDelete()
{
    $id = $this->request->getPost('id');
    $userId = $this->request->getPost('user_id');

    if (!$id || !$userId) {
        return $this->response->setJSON([
            'status' => 'error',
            'message' => 'Missing reminder.'
        ]);
    }

    $model = new ReminderModel();

    $model->where('id', $id)
          ->where('user_id', $userId)
          ->delete();

    return $this->response->setJSON([
        'status' => 'success',
        'message' => 'Reminder deleted.'
    ]);
}

    public function apiCreate()
    {
        $model = new ReminderModel();

        $model->insert([
            'user_id'       => $this->request->getPost('user_id'),
            'title'         => $this->request->getPost('title'),
            'description'   => $this->request->getPost('description'),
            'reminder_date' => $this->request->getPost('reminder_date'),
            'reminder_time' => $this->request->getPost('reminder_time'),
        ]);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Reminder added'
        ]);
    }
}