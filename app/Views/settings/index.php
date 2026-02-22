<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
  <div class="col-lg-3">
    <?= $this->include('partials/student_sidebar') ?>
  </div>

  <div class="col-lg-9">
    <div class="bg-white border rounded-4 p-4 mb-4" style="border-top:6px solid #D4AF37;">
      <h1 class="h4 fw-bold mb-1" style="color:#0B3D91;">Settings</h1>
      <p class="text-muted mb-0">View your profile information and update your image.</p>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"><?= esc(session()->getFlashdata('error')) ?></div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
    <?php endif; ?>

    <div class="bg-white border rounded-4 p-4">
      <div class="row g-4 align-items-center">
        <div class="col-md-4 text-center">
          <?php
            $img = !empty($user['profile_image'])
              ? base_url('assets/img/profiles/' . $user['profile_image'])
              : base_url('assets/img/profile_avatar.jpeg');
          ?>
          <img src="<?= $img ?>" class="img-fluid rounded-circle border"
               style="width:160px;height:160px;object-fit:cover;" alt="Profile image">
          <p class="small text-muted mt-2 mb-0">Profile image</p>
        </div>

        <div class="col-md-8">
          <h2 class="h6 fw-bold" style="color:#0B3D91;">Account information</h2>

          <div class="row g-3 mt-1">
            <div class="col-md-6">
              <label class="form-label small text-muted">First Name (locked)</label>
              <input class="form-control" value="<?= esc($user['first_name']) ?>" disabled>
            </div>
            <div class="col-md-6">
              <label class="form-label small text-muted">Last Name (locked)</label>
              <input class="form-control" value="<?= esc($user['last_name']) ?>" disabled>
            </div>
            <div class="col-12">
              <label class="form-label small text-muted">Email</label>
              <input class="form-control" value="<?= esc($user['email']) ?>" disabled>
            </div>
          </div>

          <hr class="my-4">

          <h3 class="h6 fw-bold" style="color:#0B3D91;">Change profile image</h3>
          <form method="post" action="<?= base_url('settings/profile-image') ?>" enctype="multipart/form-data">
            <input type="file" name="profile_image" class="form-control mb-3" required>
            <button class="btn" style="background:#D4AF37; font-weight:800;">Upload new image</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

<?= $this->endSection() ?>