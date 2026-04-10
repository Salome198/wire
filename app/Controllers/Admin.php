<?php

namespace App\Controllers;

use App\Models\SupportRequestModel;

class Admin extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard');
        }

        $requestModel = new SupportRequestModel();

        $requests = $requestModel->orderBy('created_at', 'DESC')->findAll();

        return view('admin/index', [
            'title' => 'Wire | Admin Dashboard',
            'requests' => $requests
        ]);
    }
}