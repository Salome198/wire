<?php

namespace App\Controllers;

use App\Models\SupportModel;

class Support extends BaseController
{
    public function index()
    {
        // Only logged-in students should access support dashboard pages
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }
        $this->trackFeatureUsage('support');

        $model = new SupportModel();

        $supportItems = $model->where('user_id', session()->get('user_id'))
                              ->orderBy('created_at', 'DESC')
                              ->findAll();

        return view('students/support', [
            'title' => 'Wire | Support',
            'supportItems' => $supportItems
        ]);
    }

    public function create()
    {
        // Protect the form route too
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        $model = new SupportModel();

        $model->insert([
            'user_id'      => session()->get('user_id'),
            'support_type' => $this->request->getPost('support_type'),
            'organisation' => $this->request->getPost('organisation'),
            'contact_info' => $this->request->getPost('contact_info'),
            'link'         => $this->request->getPost('link'),
            'notes'        => $this->request->getPost('notes'),
        ]);

        return redirect()->to('/support')->with('success', 'Support item added successfully.');
    }

    public function wellbeing()
{
    if (!session()->get('is_logged_in')) {
        return redirect()->to('/login');
    }

    return view('students/support_wellbeing', [
        'title' => 'Wire | Wellbeing Support'
    ]);
}

public function academic()
{
    if (!session()->get('is_logged_in')) {
        return redirect()->to('/login');
    }

    return view('students/support_academic', [
        'title' => 'Wire | Academic Skills'
    ]);
}

public function financial()
{
    if (!session()->get('is_logged_in')) {
        return redirect()->to('/login');
    }

    if (session()->get('role') !== 'student') {
        return redirect()->to('/admin');
    }

    return view('students/support_financial', [
        'title' => 'Wire | Financial Support'
    ]);
}

public function careers()
{
    if (!session()->get('is_logged_in')) {
        return redirect()->to('/login');
    }

    return view('students/support_careers', [
        'title' => 'Wire | Careers Support'
    ]);
}
}