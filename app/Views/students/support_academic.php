<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">
        <a href="<?= base_url('support') ?>" class="btn btn-outline-secondary mb-3">← Back to Support</a>

        <div class="wire-card p-4 mb-4">
            <h1 class="h4 fw-bold mb-2" style="color:#0B3D91;">Academic Skills Support</h1>
            <p class="text-muted mb-0">
                Improve your academic confidence with guidance on writing, referencing, revision and assignment preparation.
            </p>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="wire-soft-card p-4 h-100">
                    <div class="fw-bold mb-2">Academic Writing</div>
                    <p class="small text-muted mb-0">Get support with structure, clarity, critical writing and presenting ideas effectively.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wire-soft-card p-4 h-100">
                    <div class="fw-bold mb-2">Referencing</div>
                    <p class="small text-muted mb-0">Understand citation styles and avoid accidental plagiarism by referencing correctly.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wire-soft-card p-4 h-100">
                    <div class="fw-bold mb-2">Revision</div>
                    <p class="small text-muted mb-0">Use planning and revision support to prepare better for tests, exams and coursework.</p>
                </div>
            </div>
        </div>

        <div class="wire-card p-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Suggested academic support links</h2>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">Study Skills Team</div>
                        <p class="small text-muted mb-3">Find workshops, one-to-one sessions and study development support.</p>
                        <a href="https://www.wlv.ac.uk/lib/skills-for-learning/" target="_blank" class="btn wire-btn-gold btn-sm">Open Support</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">Referencing Help</div>
                        <p class="small text-muted mb-3">Access reliable guidance for Harvard referencing and source management.</p>
                      <a href="https://www.wlv.ac.uk/lib/skills-for-learning/one-to-one-support/" target="_blank" class="btn wire-btn-gold btn-sm">View Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>