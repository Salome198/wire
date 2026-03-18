<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Task extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new TaskModel();

        $tasks = $model->where('user_id', session()->get('user_id'))
                       ->orderBy('due_date', 'ASC')
                       ->findAll();

        return view('students/tasks', [
            'title' => 'Wire | Tasks',
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new TaskModel();

        $model->insert([
            'user_id'     => session()->get('user_id'),
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'due_date'    => $this->request->getPost('due_date'),
            'status'      => $this->request->getPost('status') ?: 'Pending',
        ]);

        return redirect()->to('/tasks')->with('success', 'Task added successfully.');
    }
}