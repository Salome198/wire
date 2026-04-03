<?php

namespace App\Controllers;
use App\Models\FeatureUsageModel;

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
        $userId = session()->get('user_id');

    $featureUsageModel = new FeatureUsageModel();

    $usageRows = $featureUsageModel
        ->select('feature_name, COUNT(*) as total')
        ->where('user_id', $userId)
        ->groupBy('feature_name')
        ->findAll();

    $usage = [
        'reminders' => 0,
        'tasks' => 0,
        'timetable' => 0,
        'deadlines' => 0,
        'resources' => 0,
        'support' => 0,
    ];

    foreach ($usageRows as $row) {
        $usage[$row['feature_name']] = (int) $row['total'];
    }

    return view('dashboard/index', [
        'title' => 'Wire | Dashboard',
        'usage' => $usage,
    ]);
    }
}
