<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-md-7 col-lg-6">

        <div class="bg-white border rounded-4 p-4" style="border-top:6px solid #D4AF37;">
            <h1 class="h4 fw-bold mb-1" style="color:#0B3D91;">Create your account</h1>
            <p class="text-muted mb-3">Sign up to start managing reminders, tasks, and support tools.</p>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <form method="post" action="<?= base_url('register') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">First name</label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Last name</label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                </div>

                <div class="mt-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mt-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    <div class="form-text">Minimum 6 characters.</div>
                </div>

                <div class="mt-3">
                    <label class="form-label">Confirm password</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>

                <button class="btn w-100 mt-4" style="background:#D4AF37; font-weight:900;">
                    Create account
                </button>

                <p class="small text-muted mt-3 mb-0">
                    Already have an account?
                    <a href="<?= base_url('login') ?>" style="color:#0B3D91; font-weight:700;">Login</a>
                </p>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
