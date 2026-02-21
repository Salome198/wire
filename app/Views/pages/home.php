<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- HERO -->
<section class="bg-white border rounded-4 p-5" style="border-top:6px solid #D4AF37;">
  <div class="row align-items-center g-4">
    <div class="col-lg-7">
      <h1 class="display-6 fw-bold" style="color:#0B3D91;">Wire - stay organised, supported and on track.</h1>

      <p class="lead text-muted mt-3">
        Wire helps students keep everything in one place — reminders, deadlines, and useful support links
        so you can focus on learning without feeling overwhelmed.
      </p>

      <div class="d-flex flex-wrap gap-2 mt-4">
        <!-- Keep ONE main action button only -->
        <a class="btn btn-lg" style="background:#D4AF37; font-weight:800;" href="<?= site_url('register') ?>">
          Get started
        </a>
        <a class="btn btn-lg btn-outline-primary" href="<?= site_url('about') ?>">Learn more</a>
      </div>

      <div class="small mt-3" style="color:#0B3D91;">
        <strong>Designed for students</strong> simple, supportive, and easy to use.
      </div>
    </div>

    <!-- IMAGE / VIDEO PLACEHOLDER -->
    <div class="col-lg-5">
      <div class="border rounded-4 p-4" style="background:#F3F7FF;">
        <div class="d-flex justify-content-between align-items-center">
          <strong style="color:#0B3D91;">Preview</strong>
          <span class="badge" style="background:#0B3D91;">Coming soon</span>
        </div>

        <p class="text-muted mt-2 mb-3">
          This space will display screenshots, a short demo video, or a slide carousel showing the student dashboard.
        </p>

        <div class="border rounded-3 bg-white d-flex align-items-center justify-content-center" style="height:220px;">
          <span class="text-muted">Add image / video here</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="row g-4 mt-4">
  <div class="col-md-4">
    <div class="bg-white border rounded-4 p-4 h-100">
      <h3 class="h6 fw-bold" style="color:#0B3D91;">Reminders & deadlines</h3>
      <p class="text-muted mb-0">
        Keep track of assignments, personal tasks, and important dates so nothing slips through the cracks.
      </p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="bg-white border rounded-4 p-4 h-100">
      <h3 class="h6 fw-bold" style="color:#0B3D91;">Your dashboard</h3>
      <p class="text-muted mb-0">
        A personalised dashboard will show your week at a glance — upcoming tasks, reminders, and progress.
      </p>
    </div>
  </div>

  <div class="col-md-4">
    <div class="bg-white border rounded-4 p-4 h-100">
      <h3 class="h6 fw-bold" style="color:#0B3D91;">Support in one place</h3>
      <p class="text-muted mb-0">
        Quick access to wellbeing, study support, and helpful resources when you need guidance.
      </p>
    </div>
  </div>
</section>

<!-- HOW IT WORKS (student-friendly wording) -->
<section class="bg-white border rounded-4 p-5 mt-4" style="border-left:6px solid #0B3D91;">
  <h2 class="h4 fw-bold" style="color:#0B3D91;">How Wire supports you</h2>
  <p class="text-muted mt-2 mb-4" style="max-width:900px;">
    Wire is built to reduce stress by organising what matters most. It’s designed to be simple:
    create an account, set your reminders, and use your dashboard to stay on top of your routine.
  </p>

  <div class="row g-3">
    <div class="col-md-4">
      <div class="border rounded-4 p-4 h-100" style="background:#FDF6E5;">
        <strong style="color:#0B3D91;">Step 1</strong>
        <p class="text-muted mb-0 mt-2">Create an account to personalise your dashboard.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="border rounded-4 p-4 h-100" style="background:#F3F7FF;">
        <strong style="color:#0B3D91;">Step 2</strong>
        <p class="text-muted mb-0 mt-2">Add reminders for tasks, assignments, and important dates.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="border rounded-4 p-4 h-100" style="background:#FDF6E5;">
        <strong style="color:#0B3D91;">Step 3</strong>
        <p class="text-muted mb-0 mt-2">Use your dashboard to stay organised and supported.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA (no extra login/register buttons) -->
<section class="bg-white border rounded-4 p-5 mt-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
    <div>
      <h2 class="h5 fw-bold mb-1" style="color:#0B3D91;">Ready to get organised?</h2>
      <p class="text-muted mb-0">Create an account and start building your routine in one place.</p>
    </div>
    <div>
      <a class="btn btn-lg" style="background:#D4AF37; font-weight:800;" href="<?= site_url('register') ?>">
        Create account
      </a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
