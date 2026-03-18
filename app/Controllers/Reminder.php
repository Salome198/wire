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

        $model = new ReminderModel();

        $reminders = $model->where('user_id', session()->get('user_id'))
                           ->orderBy('reminder_date', 'ASC')
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
}