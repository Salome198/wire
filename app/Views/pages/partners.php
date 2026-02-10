<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="wire-card bg-white p-5">
  <h1 class="h3 fw-bold text-wire-blue">Partners</h1>
  <p class="mt-2" style="color: var(--wire-muted); max-width: 900px;">
    Wire signposts students to trusted sources of support. This section represents the types of services
    students commonly need access to during university life.
  </p>

  <div class="row g-3 mt-4">
    <div class="col-md-4">
      <div class="wire-card p-4 bg-light h-100">
        <h2 class="h6 fw-bold">Student Services</h2>
        <p class="mb-0" style="color: var(--wire-muted);">
          Guidance on academic processes, student welfare, and study-related support.
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="wire-card p-4 bg-light h-100">
        <h2 class="h6 fw-bold">Wellbeing Support</h2>
        <p class="mb-0" style="color: var(--wire-muted);">
          Information routes for wellbeing resources, counselling, and mental health support options.
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="wire-card p-4 bg-light h-100">
        <h2 class="h6 fw-bold">Study Skills</h2>
        <p class="mb-0" style="color: var(--wire-muted);">
          Time management guidance, writing support, and academic development resources.
        </p>
      </div>
    </div>
  </div>

  <div class="wire-card p-4 bg-light mt-4">
    <p class="mb-0" style="color: var(--wire-muted);">
      Partner links will be finalised during evaluation and validation to ensure accuracy and trustworthiness.
    </p>
  </div>
</div>

<?= $this->endSection() ?>
