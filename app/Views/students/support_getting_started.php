<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">

        <a href="<?= base_url('support') ?>" class="btn btn-outline-secondary mb-3">
            ← Back to Support
        </a>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm" style="border-top:6px solid #0B3D91;">
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Getting Started with Wire</h1>
            <p class="text-muted mb-0">
                Learn how to use the main features in your dashboard.
            </p>
        </div>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">How to use Reminders</h2>
            <p class="text-muted mb-0">
                Open the Reminders page from the dashboard or sidebar, enter your reminder title, date and optional time,
                then save it. Your reminder will appear in your reminders list and upcoming dashboard notifications.
            </p>
        </div>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">How to use Tasks</h2>
            <p class="text-muted mb-0">
                Go to Tasks, add a task title, due date, and status. This helps you track personal and academic work in one place.
            </p>
        </div>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">How to use Timetable</h2>
            <p class="text-muted mb-0">
                Use the Timetable page to add class sessions, days, times, and locations so your weekly schedule is stored inside Wire.
            </p>
        </div>

        <div class="bg-white border rounded-4 p-4 shadow-sm">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">How to use Deadlines</h2>
            <p class="text-muted mb-0">
                Add coursework or submission dates to the Deadlines page so you can monitor important academic due dates more easily.
            </p>
        </div>

    </div>
</div>

<?= $this->endSection() ?>