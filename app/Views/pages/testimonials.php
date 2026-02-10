<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="wire-card bg-white p-5">
  <h1 class="h3 fw-bold text-wire-blue">Testimonials</h1>
  <p class="mt-2" style="color: var(--wire-muted); max-width: 900px;">
    Feedback highlights the importance of simple planning tools for managing study life. Wire focuses on
    clarity, ease of use and reducing the mental load that comes with juggling multiple deadlines.
  </p>

  <div class="wire-card p-4 bg-light mt-4">
    <p class="mb-1 fw-semibold">“Having reminders and a weekly overview would help me manage deadlines without panic.”</p>
    <small class="text-muted">Student feedback</small>
  </div>

  <div class="wire-card p-4 bg-light mt-3">
    <p class="mb-1 fw-semibold">“A single dashboard would save time compared to checking multiple apps and emails.”</p>
    <small class="text-muted">Student feedback</small>
  </div>

  <div class="wire-card p-4 bg-light mt-3">
    <p class="mb-1 fw-semibold">“Students need quick access to support information when they feel overwhelmed.”</p>
    <small class="text-muted">Support perspective</small>
  </div>
</div>

<?= $this->endSection() ?>
