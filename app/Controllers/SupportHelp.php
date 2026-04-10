<?php

namespace App\Controllers;
use App\Models\SupportRequestModel;

class SupportHelp extends BaseController
{
    public function gettingStarted()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'student') {
            return redirect()->to('/admin');
        }

        return view('students/support_getting_started', [
            'title' => 'Wire | Getting Started'
        ]);
    }

    public function accountHelp()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        if (session()->get('role') !== 'student') {
            return redirect()->to('/admin');
        }

        return view('students/support_account_help', [
            'title' => 'Wire | Account Help'
        ]);
    }

    public function submitRequest()
{
    if (!session()->get('is_logged_in')) {
        return redirect()->to('/login');
    }

    if (session()->get('role') !== 'student') {
            return redirect()->to('/admin');
        }


    $model = new SupportRequestModel();

    $model->insert([
        'user_id' => session()->get('user_id'),
        'name'    => $this->request->getPost('name'),
        'email'   => $this->request->getPost('email'),
        'message' => $this->request->getPost('message'),
    ]);

    return redirect()->to('/support/account-help')->with('success', 'Your help request has been submitted successfully.');
}
}