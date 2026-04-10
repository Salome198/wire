<?php

namespace App\Controllers;
use App\Models\FeatureUsageModel;
use App\Models\TaskModel;
use App\Models\ReminderModel;
use App\Models\DeadlineModel;
use App\Models\TimetableModel;

class Dashboard extends BaseController
{
    public function index()
{
    if (!session()->get('is_logged_in')) {
        return redirect()->to('/login');
    }
    if (session()->get('role') !== 'student') {
    return redirect()->to('/admin');
    }

    $userId = session()->get('user_id');

    // Models
    $taskModel = new TaskModel();
    $reminderModel = new ReminderModel();
    $deadlineModel = new DeadlineModel();
    $timetableModel = new TimetableModel();
    $featureUsageModel = new FeatureUsageModel();

    // Real analytics usage
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

    // Upcoming notifications
    $nextTask = $taskModel
        ->where('user_id', $userId)
        ->where('status !=', 'Completed')
        ->orderBy('due_date', 'ASC')
        ->first();

    $nextReminder = $reminderModel
        ->where('user_id', $userId)
        ->orderBy('reminder_date', 'ASC')
        ->first();

    $nextDeadline = $deadlineModel
        ->where('user_id', $userId)
        ->orderBy('due_date', 'ASC')
        ->first();

    return view('dashboard/index', [
        'title' => 'Wire | Dashboard',
        'usage' => $usage,
        'nextTask' => $nextTask,
        'nextReminder' => $nextReminder,
        'nextDeadline' => $nextDeadline,
    ]);
}
}
