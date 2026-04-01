<?php

namespace App\Controllers;

class SupportHelp extends BaseController
{
    public function gettingStarted()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
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

        return view('students/support_account_help', [
            'title' => 'Wire | Account Help'
        ]);
    }
}