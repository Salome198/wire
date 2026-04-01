<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">
         <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-secondary mb-3">
            ← Back to Dashboard
        </a>
        <div class="bg-white border rounded-4 p-4 mb-4" style="border-top:6px solid #0B3D91;">
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Timetable</h1>
            <p class="text-muted mb-0">Manage your class schedule in one place.</p>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <div class="bg-white border rounded-4 p-4 mb-4">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">Add timetable item</h2>

            <form method="post" action="<?= base_url('timetable/create') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="module_name" class="form-control" placeholder="Module name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="location" class="form-control" placeholder="Location">
                    </div>
                    <div class="col-md-4">
                        <select name="day_of_week" class="form-select" required>
                            <option value="">Select day</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="time" name="start_time" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <input type="time" name="end_time" class="form-control" required>
                    </div>
                </div>

                <button class="btn mt-3" style="background:#D4AF37; font-weight:800;">Add item</button>
            </form>
        </div>

        <div class="bg-white border rounded-4 p-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Your timetable</h2>

            <?php if (!empty($items)): ?>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Module</th>
                                <th>Day</th>
                                <th>Time</th>
                                <th>Location</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                                <tr>
                                    <td><?= esc($item['module_name']) ?></td>
                                    <td><?= esc($item['day_of_week']) ?></td>
                                    <td><?= esc($item['start_time']) ?> - <?= esc($item['end_time']) ?></td>
                                    <td><?= esc($item['location']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-muted mb-0">No timetable items yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>