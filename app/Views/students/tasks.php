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

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm" style="border-top:6px solid #0B3D91;">
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Tasks</h1>
            <p class="text-muted mb-0">Track your study and personal tasks in one place.</p>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Add Task</h2>

            <form method="post" action="<?= base_url('tasks/create') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Task title" required>
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="due_date" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <select name="status" class="form-select">
                            <option value="Pending">Pending</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea name="description" class="form-control" rows="3" placeholder="Task description"></textarea>
                    </div>
                </div>

                <button class="btn mt-3" style="background:#D4AF37; font-weight:800;">Add Task</button>
            </form>
        </div>

        <div class="bg-white border rounded-4 p-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Your Tasks</h2>

            <?php if (!empty($tasks)): ?>
                <div class="row g-3">
                    <?php foreach ($tasks as $task): ?>
                        <div class="col-md-6">
                            <div class="border rounded-4 p-3 h-100">
                                <div class="fw-bold"><?= esc($task['title']) ?></div>
                                <div class="small text-muted">
                                    <?= esc($task['status']) ?>
                                    <?php if (!empty($task['due_date'])): ?>
                                        · Due <?= esc($task['due_date']) ?>
                                    <?php endif; ?>
                                </div>
                                <p class="small mt-2 mb-0"><?= esc($task['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-muted mb-0">No tasks added yet.</p>
            <?php endif; ?>
        </div>

    </div>
</div>

<?= $this->endSection() ?>