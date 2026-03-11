<?php

namespace App\Controllers;

use App\Models\DeadlineModel;

class Deadline extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new DeadlineModel();

        $deadlines = $model->where('user_id', session()->get('user_id'))
                           ->orderBy('due_date', 'ASC')
                           ->findAll();

        return view('student/deadlines', [
            'title' => 'Wire | Deadlines',
            'deadlines' => $deadlines
        ]);
    }

    public function create()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new DeadlineModel();

        $model->insert([
            'user_id'     => session()->get('user_id'),
            'title'       => $this->request->getPost('title'),
            'module_name' => $this->request->getPost('module_name'),
            'due_date'    => $this->request->getPost('due_date'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/deadlines')->with('success', 'Deadline added.');
    }
}