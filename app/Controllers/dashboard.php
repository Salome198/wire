<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Why: prevent unauthorised access. Only logged-in users should see dashboard.
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        // Why: Analytics is part of dashboard. For now we use placeholder values.
        // Later, this will come from database usage logs.
        $usage = [
            'Reminders' => 12,
            'Tasks'     => 9,
            'Timetable' => 6,
            'Support'   => 4,
        ];

        return view('dashboard/index', [
            'title' => 'Wire | Dashboard',
            'usage' => $usage,
        ]);
    }
}
