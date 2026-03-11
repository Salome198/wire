<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">
        <div class="bg-white border rounded-4 p-4 mb-4" style="border-top:6px solid #D4AF37;">
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Reminders</h1>
            <p class="text-muted mb-0">Create reminders for important academic and personal tasks.</p>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <div class="bg-white border rounded-4 p-4 mb-4">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">Add reminder</h2>

            <form method="post" action="<?= base_url('reminders/create') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Reminder title" required>
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="reminder_date" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <input type="time" name="reminder_time" class="form-control">
                    </div>
                    <div class="col-12">
                        <textarea name="description" class="form-control" rows="3" placeholder="Optional description"></textarea>
                    </div>
                </div>

                <button class="btn mt-3" style="background:#D4AF37; font-weight:800;">Create reminder</button>
            </form>
        </div>

        <div class="bg-white border rounded-4 p-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Upcoming reminders</h2>

            <?php if (!empty($reminders)): ?>
                <div class="row g-3">
                    <?php foreach ($reminders as $reminder): ?>
                        <div class="col-md-6">
                            <div class="border rounded-4 p-3 h-100">
                                <div class="fw-bold"><?= esc($reminder['title']) ?></div>
                                <div class="small text-muted">
                                    <?= esc($reminder['reminder_date']) ?>
                                    <?php if (!empty($reminder['reminder_time'])): ?>
                                        at <?= esc($reminder['reminder_time']) ?>
                                    <?php endif; ?>
                                </div>
                                <p class="small mt-2 mb-0"><?= esc($reminder['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-muted mb-0">No reminders added yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>