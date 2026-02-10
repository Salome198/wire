<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'Wire') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg" style="background:#0B3D91;">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="<?= site_url('/') ?>">Wire <span style="color:#D4AF37;">•</span></a>
    <div class="ms-auto d-flex gap-2">
      <a class="btn btn-link text-white text-decoration-none" href="<?= site_url('/') ?>">Home</a>
      <a class="btn btn-link text-white text-decoration-none" href="<?= site_url('/about') ?>">About</a>
      <a class="btn btn-link text-white text-decoration-none" href="<?= site_url('/testimonials') ?>">Testimonials</a>
      <a class="btn btn-link text-white text-decoration-none" href="<?= site_url('/partners') ?>">Partners</a>
      <a class="btn btn-outline-light" href="<?= site_url('/login') ?>">Login</a>
      <a class="btn" style="background:#D4AF37; font-weight:700;" href="<?= site_url('/register') ?>">Register</a>
    </div>
  </div>
</nav>

<main class="container py-5">
  <?= $this->renderSection('content') ?>
</main>

<footer class="border-top bg-white py-4">
  <div class="container small text-muted">
    <span style="color:#0B3D91; font-weight:700;">Wire</span> — helping students stay organised and supported.
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
