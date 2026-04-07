<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">

    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">

        <!-- Welcome -->
        <div class="wire-card p-4 mb-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h1 class="mb-2 fw-bold" style="color:#0B3D91;">
                        Welcome back, <?= esc(session()->get('first_name')) ?> 👋
                    </h1>
                    <p class="text-muted mb-0">
                        Here is your dashboard overview, including your most used tools and quick access to key features.
                    </p>
                </div>

                <div class="px-3 py-2 rounded-3" style="background:#fff8e1; color:#8a6d1f; font-weight:600;">
                    Stay organised today
                </div>
            </div>
        </div>

        <div class="wire-card p-4 mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h6 fw-bold mb-0" style="color:#0B3D91;">Upcoming Notifications</h2>
        <span class="small text-muted">Live from your records</span>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="wire-soft-card p-3 h-100">
                <div class="fw-bold mb-2" style="color:#0B3D91;">Next Task</div>

                <?php if (!empty($nextTask)): ?>
                    <div class="small text-muted mb-1"><?= esc($nextTask['title']) ?></div>
                    <div class="small">
                        Due: <?= !empty($nextTask['due_date']) ? esc($nextTask['due_date']) : 'No due date set' ?>
                    </div>
                    <div class="small text-muted mt-1">Status: <?= esc($nextTask['status']) ?></div>
                <?php else: ?>
                    <div class="small text-muted">No upcoming tasks.</div>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-4">
            <div class="wire-soft-card p-3 h-100">
                <div class="fw-bold mb-2" style="color:#0B3D91;">Next Reminder</div>

                <?php if (!empty($nextReminder)): ?>
                    <div class="small text-muted mb-1"><?= esc($nextReminder['title']) ?></div>
                    <div class="small">
                        Date: <?= esc($nextReminder['reminder_date']) ?>
                    </div>
                    <?php if (!empty($nextReminder['reminder_time'])): ?>
                        <div class="small text-muted mt-1">Time: <?= esc($nextReminder['reminder_time']) ?></div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="small text-muted">No upcoming reminders.</div>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-4">
            <div class="wire-soft-card p-3 h-100">
                <div class="fw-bold mb-2" style="color:#0B3D91;">Next Deadline</div>

                <?php if (!empty($nextDeadline)): ?>
                    <div class="small text-muted mb-1"><?= esc($nextDeadline['title']) ?></div>
                    <div class="small">
                        Due: <?= esc($nextDeadline['due_date']) ?>
                    </div>
                    <?php if (!empty($nextDeadline['module_name'])): ?>
                        <div class="small text-muted mt-1"><?= esc($nextDeadline['module_name']) ?></div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="small text-muted">No upcoming deadlines.</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

        <!-- Feature cards -->
        <div class="row g-3 mb-4">
            <?php
            $cards = [
                ['Reminders', 'Set reminders for assignments and important tasks.'],
                ['Tasks', 'Plan and track what you need to complete this week.'],
                ['Timetable', 'View your study schedule at a glance.'],
                ['Deadlines', 'Track assessments and submission dates.'],
                ['Resources', 'Save useful links, guides and learning tools.'],
                ['Support', 'Access wellbeing and student support information.'],
            ];
            ?>

            <?php foreach ($cards as $c): ?>
                <div class="col-md-6 col-xl-4">
                    <div class="wire-card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <h3 class="h6 fw-bold mb-0" style="color:#0B3D91;"><?= esc($c[0]) ?></h3>
                            <span class="rounded-circle d-inline-block" style="width:12px; height:12px; background:#D4AF37;"></span>
                        </div>

                        <p class="text-muted small mb-4"><?= esc($c[1]) ?></p>

                        <a href="<?=
                            $c[0] == 'Reminders' ? base_url('reminders') :
                            ($c[0] == 'Tasks' ? base_url('tasks') :
                            ($c[0] == 'Timetable' ? base_url('timetable') :
                            ($c[0] == 'Deadlines' ? base_url('deadlines') :
                            ($c[0] == 'Resources' ? base_url('resources') :
                            ($c[0] == 'Support' ? base_url('support') :
                            '#')))))
                        ?>" class="btn wire-btn-gold btn-sm px-3">
                            Open
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Analytics -->
        <div class="wire-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="h6 fw-bold mb-0" style="color:#0B3D91;">Most Used Tools</h2>
                <span class="small text-muted">Live from your activity</span>
            </div>

            <div class="row g-3">
                <?php foreach ($usage as $tool => $count): ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="wire-soft-card p-3 h-100">
                            <div class="small text-muted text-capitalize mb-2"><?= esc($tool) ?></div>
                            <div class="wire-stat-number"><?= esc($count) ?></div>
                            <div class="small text-muted">times opened</div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p class="text-muted small mt-3 mb-0">
                This section updates based on how often you open features in your dashboard.
            </p>
        </div>

    </div>
</div>

<?= $this->endSection() ?>