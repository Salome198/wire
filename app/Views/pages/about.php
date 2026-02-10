<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="wire-card bg-white p-5">
  <h1 class="h3 fw-bold text-wire-blue">About Wire</h1>

  <p class="mt-3" style="color: var(--wire-muted); max-width: 900px;">
    Wire is a student support web application created to improve organisation and reduce stress during study.
    It centralises planning tools such as reminders and deadlines and connects students to relevant support
    information through a simple, accessible interface.
  </p>

  <div class="row g-4 mt-3">
    <div class="col-md-6">
      <div class="wire-card p-4 bg-light h-100">
        <h2 class="h6 fw-bold mb-2">Mission</h2>
        <p class="mb-0" style="color: var(--wire-muted);">
          Help students stay organised and supported by providing a clear dashboard experience that supports
          time management, planning, and access to key resources.
        </p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="wire-card p-4 bg-light h-100">
        <h2 class="h6 fw-bold mb-2">Core goals</h2>
        <ul class="mb-0">
          <li>Improve time management and task tracking</li>
          <li>Reduce missed deadlines and last-minute pressure</li>
          <li>Support student wellbeing through better organisation</li>
          <li>Provide quick access to essential support resources</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="wire-card p-4 bg-light mt-4">
    <h2 class="h6 fw-bold mb-2">How Wire works</h2>
    <p class="mb-0" style="color: var(--wire-muted);">
      Students sign in to access their personal dashboard, create reminders, and manage deadlines. The
      application follows a structured MVC approach and connects to a MySQL database to store user and reminder data.
    </p>
  </div>
</div>

<?= $this->endSection() ?>
