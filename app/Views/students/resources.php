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
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Resources</h1>
            <p class="text-muted mb-0">Useful study tools and learning links.</p>
        </div>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3">Featured Resources</h2>

            <div class="row g-3">

    <div class="col-md-6">
        <div class="border rounded-4 p-3 shadow-sm h-100">
            <div class="fw-bold">University Library</div>
            <p class="small text-muted">Access journals, books and databases.</p>
            <a href="https://www.wlv.ac.uk/lib" target="_blank" class="btn btn-sm btn-outline-primary">
                Open
            </a>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded-4 p-3 shadow-sm h-100">
            <div class="fw-bold">Referencing Guide</div>
            <p class="small text-muted">Harvard referencing support.</p>
            <a href="https://www.citethemrightonline.com/" target="_blank" class="btn btn-sm btn-outline-primary">
                Open
            </a>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded-4 p-3 shadow-sm h-100">
            <div class="fw-bold">Student Portal</div>
            <p class="small text-muted">Access your university systems.</p>
            <a href="https://evision.wlv.ac.uk/" target="_blank" class="btn btn-sm btn-outline-primary">
                Open
            </a>
        </div>
    </div>

    <div class="col-md-6">
        <div class="border rounded-4 p-3 shadow-sm h-100">
            <div class="fw-bold">Study Skills Support</div>
            <p class="small text-muted">Writing and academic help.</p>
            <a href="https://www.wlv.ac.uk/current-students/study-support/" target="_blank" class="btn btn-sm btn-outline-primary">
                Open
            </a>
        </div>
    </div>

</div>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3">Add Personal Resource</h2>

            <form method="post" action="<?= base_url('resources/create') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="category" class="form-control" placeholder="Category">
                    </div>

                    <div class="col-12">
                        <input type="url" name="link" class="form-control" placeholder="https://example.com" required>
                    </div>

                    <div class="col-12">
                        <textarea name="description" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <button class="btn mt-3" style="background:#D4AF37;">Add Resource</button>
            </form>
        </div>

        <div class="bg-white border rounded-4 p-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3">My Saved Resources</h2>

            <?php if (!empty($resources)): ?>
                <?php foreach ($resources as $resource): ?>
                    <div class="border rounded-4 p-3 mb-3">
                        <div class="fw-bold"><?= esc($resource['title']) ?></div>
                        <p class="small text-muted"><?= esc($resource['description']) ?></p>
                        <a href="<?= esc($resource['link']) ?>" target="_blank">Open</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No resources added yet.</p>
            <?php endif; ?>
        </div>

    </div>
</div>

<?= $this->endSection() ?>