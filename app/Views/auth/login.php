<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">

        <div class="bg-white border rounded-4 p-4" style="border-top:6px solid #D4AF37;">
            <h1 class="h4 fw-bold mb-1" style="color:#0B3D91;">Login</h1>
            <p class="text-muted mb-3">Access your dashboard and manage your study tools.</p>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>

            <form method="post" action="<?= base_url('login') ?>">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button class="btn w-100" style="background:#0B3D91; color:#fff; font-weight:800;">
                    Login
                </button>

                <p class="small text-muted mt-3 mb-0">
                    Don’t have an account?
                    <a href="<?= base_url('register') ?>" style="color:#0B3D91; font-weight:700;">Create one</a>
                </p>
            </form>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
