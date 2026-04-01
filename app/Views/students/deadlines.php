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
        <div class="bg-white border rounded-4 p-4 mb-4" style="border-top:6px solid #D4AF37;">
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Deadlines</h1>
            <p class="text-muted mb-0">Keep track of coursework and submission dates.</p>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <div class="bg-white border rounded-4 p-4 mb-4">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">Add deadline</h2>

            <form method="post" action="<?= base_url('deadlines/create') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Deadline title" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="module_name" class="form-control" placeholder="Module name">
                    </div>
                    <div class="col-md-4">
                        <input type="date" name="due_date" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <textarea name="description" class="form-control" rows="3" placeholder="Optional description"></textarea>
                    </div>
                </div>

                <button class="btn mt-3" style="background:#D4AF37; font-weight:800;">Add deadline</button>
            </form>
        </div>

        <div class="bg-white border rounded-4 p-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Upcoming deadlines</h2>

            <?php if (!empty($deadlines)): ?>
                <div class="row g-3">
                    <?php foreach ($deadlines as $deadline): ?>
                        <div class="col-md-6">
                            <div class="border rounded-4 p-3 h-100">
                                <div class="fw-bold"><?= esc($deadline['title']) ?></div>
                                <div class="small text-muted">
                                    <?= esc($deadline['module_name']) ?> · Due <?= esc($deadline['due_date']) ?>
                                </div>
                                <p class="small mt-2 mb-0"><?= esc($deadline['description']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-muted mb-0">No deadlines added yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>