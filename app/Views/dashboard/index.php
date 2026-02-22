<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
  <!-- Sidebar -->
  <div class="col-lg-3">
    <?= $this->include('partials/student_sidebar') ?>
  </div>

  <!-- Main area -->
  <div class="col-lg-9">
    <div class="bg-white border rounded-4 p-4 mb-4" style="border-top:6px solid #D4AF37;">
      <h1 class="h4 fw-bold mb-1" style="color:#0B3D91;">
        Welcome, <?= esc(session()->get('first_name')) ?> 👋
      </h1>
      <p class="text-muted mb-0">Here is your dashboard overview.</p>
    </div>

    <!-- Feature cards -->
    <div class="row g-3 mb-4">
      <?php
        $cards = [
          ['Reminders','Set reminders for assignments and important tasks.'],
          ['Tasks','Plan and track what you need to complete this week.'],
          ['Timetable','View your study schedule at a glance.'],
          ['Deadlines','Track assessments and submission dates.'],
          ['Resources','Save useful links, guides and learning tools.'],
          ['Support','Access wellbeing and student support information.'],
        ];
      ?>

      <?php foreach ($cards as $c): ?>
        <div class="col-md-6 col-xl-4">
          <div class="bg-white border rounded-4 p-4 h-100">
            <h3 class="h6 fw-bold" style="color:#0B3D91;"><?= esc($c[0]) ?></h3>
            <p class="text-muted small mb-3"><?= esc($c[1]) ?></p>
            <a href="#" class="btn btn-sm" style="background:#D4AF37; font-weight:700;">Open</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Analytics -->
    <div class="bg-white border rounded-4 p-4">
      <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Most used tools (analytics)</h2>

      <div class="row g-3">
        <?php foreach ($usage as $tool => $count): ?>
          <div class="col-md-6 col-xl-3">
            <div class="border rounded-4 p-3">
              <div class="small text-muted"><?= esc($tool) ?></div>
              <div class="fs-4 fw-bold" style="color:#0B3D91;"><?= esc($count) ?></div>
              <div class="small text-muted">opens this month</div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <p class="text-muted small mt-3 mb-0">
        This will later update automatically based on real feature usage.
      </p>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
