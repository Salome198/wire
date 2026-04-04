<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">
        <a href="<?= base_url('support') ?>" class="btn btn-outline-secondary mb-3">← Back to Support</a>

        <div class="wire-card p-4 mb-4">
            <h1 class="h4 fw-bold mb-2" style="color:#0B3D91;">Financial Support</h1>
            <p class="text-muted mb-0">
                Find guidance on budgeting, hardship support and student finance options while managing university life.
            </p>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <div class="wire-soft-card p-4 h-100">
                    <h2 class="h6 fw-bold" style="color:#0B3D91;">Budget planning</h2>
                    <p class="small text-muted mb-0">
                        Track regular costs such as food, transport, rent and study essentials to avoid financial pressure building up.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="wire-soft-card p-4 h-100">
                    <h2 class="h6 fw-bold" style="color:#0B3D91;">Support options</h2>
                    <p class="small text-muted mb-0">
                        Students may be able to access hardship funds, bursaries or financial advice through university support teams.
                    </p>
                </div>
            </div>
        </div>

        <div class="wire-card p-4">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Useful financial help</h2>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">Student Finance Guidance</div>
                        <p class="small text-muted mb-3">Check funding information and support options relevant to your studies.</p>
                        <a href="https://www.wlv.ac.uk/apply/funding-costs-fees-and-support/funding-and-budgeting-for-university/" target="_blank" class="btn wire-btn-gold btn-sm">Visit Support</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wire-soft-card p-3 h-100">
                        <div class="fw-bold">University Money Advice</div>
                        <p class="small text-muted mb-3">Access local budgeting support or hardship advice provided by your university.</p>
                        <a href="https://www.wlv.ac.uk/apply/funding-costs-fees-and-support/funding-and-budgeting-for-university/" target="_blank" class="btn wire-btn-gold btn-sm">Visit Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>