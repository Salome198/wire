<?php

namespace App\Controllers;

use App\Models\ResourceModel;

class Resource extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new ResourceModel();

        $resources = $model->where('user_id', session()->get('user_id'))
                           ->orderBy('created_at', 'DESC')
                           ->findAll();

        return view('students/resources', [
            'title' => 'Wire | Resources',
            'resources' => $resources
        ]);
    }

    public function create()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new ResourceModel();

        $model->insert([
            'user_id'     => session()->get('user_id'),
            'title'       => $this->request->getPost('title'),
            'category'    => $this->request->getPost('category'),
            'link'        => $this->request->getPost('link'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/resources')->with('success', 'Resource added successfully.');
    }
}