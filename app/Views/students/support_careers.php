<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">
        <a href="<?= base_url('support') ?>" class="btn btn-outline-secondary mb-3">← Back to Support</a>

        <div class="wire-card p-4 mb-4">
            <h1 class="h4 fw-bold mb-2" style="color:#0B3D91;">Careers Support</h1>
            <p class="text-muted mb-0">
                Get support with CV writing, employability, applications and preparing for work alongside your studies.
            </p>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="wire-soft-card p-4 h-100">
                    <div class="fw-bold mb-2">CV Support</div>
                    <p class="small text-muted mb-0">Improve your CV structure, content and presentation before applications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wire-soft-card p-4 h-100">
                    <div class="fw-bold mb-2">Interview Prep</div>
                    <p class="small text-muted mb-0">Build confidence by preparing answers and understanding common interview expectations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="wire-soft-card p-4 h-100">
                    <div class="fw-bold mb-2">Employability</div>
                    <p class="small text-muted mb-0">Access advice on internships, placements and graduate opportunities.</p>
                </div>
            </div>
        </div>

        <div class="wire-card p-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Career development links</h2>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">Careers Service</div>
                        <p class="small text-muted mb-3">Explore appointments, workshops and job search support from your university.</p>
                        <a href="https://www.wlv.ac.uk/current-students/careers-enterprise-and-the-workplace/" target="_blank" class="btn wire-btn-gold btn-sm">Open Service</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">CV and Application Help</div>
                        <p class="small text-muted mb-3">Use support materials to improve applications and job readiness.</p>
                        <a href="https://www.wlv.ac.uk/current-students/careers-enterprise-and-the-workplace/careers/careers-appointments/" target="_blank" class="btn wire-btn-gold btn-sm">View Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>