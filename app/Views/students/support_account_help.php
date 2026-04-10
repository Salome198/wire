<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">

        <a href="<?= base_url('support') ?>" class="btn btn-outline-secondary mb-3">
            ← Back to Support
        </a>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm" style="border-top:6px solid #0B3D91;">
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Account & Settings Help</h1>
            <p class="text-muted mb-0">
                Get help with login, settings, profile image, and dashboard navigation.
            </p>
        </div>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">Profile Settings</h2>
            <p class="text-muted mb-0">
                You can update your profile image in Settings. Your name and surname are locked for account consistency.
            </p>
        </div>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold" style="color:#0B3D91;">Navigation Help</h2>
            <p class="text-muted mb-0">
                Use the sidebar to move between dashboard features. You can also use the back button at the top of each page to return quickly.
            </p>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success mb-4">
        <?= esc(session()->getFlashdata('success')) ?>
    </div>
<?php endif; ?>

<div class="bg-white border rounded-4 p-4 shadow-sm">
    <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Send a Help Request</h2>

    <form method="post" action="<?= base_url('support/submit-request') ?>">
        <div class="row g-3">
            <div class="col-md-6">
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Your name"
                    value="<?= esc(session()->get('first_name') ?? '') ?>"
                    required>
            </div>

            <div class="col-md-6">
                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Your email"
                    value="<?= esc(session()->get('email') ?? '') ?>"
                    required>
            </div>

            <div class="col-12">
                <textarea
                    name="message"
                    class="form-control"
                    rows="4"
                    placeholder="Describe the issue you need help with"
                    required></textarea>
            </div>
        </div>

        <button type="submit" class="btn mt-3" style="background:#D4AF37; font-weight:800;">
            Submit Help Request
        </button>
    </form>

    <p class="small text-muted mt-3 mb-0">
        Your request will be stored in the system for review.
    </p>
</div>

            <p class="small text-muted mt-3 mb-0">
                This form is currently a prototype for support request submission.
            </p>
        </div>

    </div>
</div>

<?= $this->endSection() ?>