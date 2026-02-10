<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="wire-card bg-white p-5">
  <h1 class="h3 fw-bold text-wire-blue">About Wire</h1>
  <p class="text-muted mt-3" style="max-width: 900px;">
    Wire is a student support web application created to help students manage academic deadlines,
    reduce overwhelm, and access support resources in one place. The project focuses on usability,
    clear navigation and a simple dashboard experience.
  </p>

  <div class="row g-4 mt-2">
    <div class="col-md-6">
      <div class="wire-card p-4 bg-light h-100">
        <h2 class="h6 fw-bold mb-2">Aims</h2>
        <ul class="mb-0">
          <li>Support better time management and planning</li>
          <li>Reduce missed deadlines and last-minute pressure</li>
          <li>Provide quick access to key student support information</li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <div class="wire-card p-4 bg-light h-100">
        <h2 class="h6 fw-bold mb-2">Prototype scope</h2>
        <p class="text-muted mb-0">
          The prototype demonstrates the front-end structure (Home, About, Testimonials, Partners)
          and prepares the foundation for authentication and user features.
        </p>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
