<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">
        <a href="<?= base_url('support') ?>" class="btn btn-outline-secondary mb-3">← Back to Support</a>

        <div class="wire-card p-4 mb-4">
            <h1 class="h4 fw-bold mb-2" style="color:#0B3D91;">Wellbeing Support</h1>
            <p class="text-muted mb-0">
                Access trusted wellbeing guidance, mental health signposting, and practical ways to protect your wellbeing during your studies.
            </p>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="wire-soft-card p-4 h-100">
                    <h2 class="h6 fw-bold" style="color:#0B3D91;">When to seek support</h2>
                    <p class="text-muted small mb-0">
                        Seek support if you are feeling overwhelmed, anxious, emotionally low, isolated, or unable to manage day-to-day study pressure.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wire-soft-card p-4 h-100">
                    <h2 class="h6 fw-bold" style="color:#0B3D91;">What Wire can do</h2>
                    <p class="text-muted small mb-0">
                        Wire helps you stay organised with reminders, tasks, deadlines and support links, but it does not replace professional wellbeing services.
                    </p>
                </div>
            </div>
        </div>

        <div class="wire-card p-4 mb-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Recommended support options</h2>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">University Wellbeing Service</div>
                        <p class="small text-muted mb-3">Speak to your university’s student wellbeing or counselling team for direct support.</p>
                       <a href="https://www.wlv.ac.uk/current-students/student-support/mental-health-and-wellbeing-advice/" target="_blank" class="btn wire-btn-gold btn-sm">Visit Service</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">NHS Mental Health Support</div>
                        <p class="small text-muted mb-3">Use official mental health support information if you need trusted public health guidance.</p>
                        <a href="https://www.wlv.ac.uk/current-students/student-support/mental-health-and-wellbeing-advice/wlv-student-life-connect/" target="_blank" class="btn wire-btn-gold btn-sm">Open Guidance</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="wire-card p-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Daily wellbeing reminders</h2>
            <ul class="text-muted small mb-0">
                <li>Take regular breaks when studying.</li>
                <li>Use reminders for important tasks instead of keeping everything in your head.</li>
                <li>Reach out early if you feel you are falling behind.</li>
                <li>Keep a balanced routine with sleep, food and hydration.</li>
            </ul>
        </div>
    </div>
</div>

<?= $this->endSection() ?>