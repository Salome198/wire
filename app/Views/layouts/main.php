<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'Wire') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg" style="background:#0B3D91;">
  <div class="container">
    <a class="navbar-brand fw-bold text-white" href="<?= site_url('/') ?>">Wire <span style="color:#D4AF37;">•</span></a>
    <div class="ms-auto d-flex gap-2">
     <a class="btn btn-link text-white text-decoration-none" href="<?= base_url('/') ?>">Home</a>
    <a class="btn btn-link text-white text-decoration-none" href="<?= base_url('about') ?>">About</a>
    <a class="btn btn-link text-white text-decoration-none" href="<?= base_url('testimonials') ?>">Testimonials</a>
    <a class="btn btn-link text-white text-decoration-none" href="<?= base_url('partners') ?>">Partners</a>
    <a class="btn btn-outline-light" href="<?= base_url('login') ?>">Login</a>
    <a class="btn" style="background:#D4AF37; font-weight:700;" href="<?= base_url('register') ?>">Register</a>

  </div>
</nav>

<main class="container py-5">
  <?= $this->renderSection('content') ?>
</main>

<footer class="border-top bg-white py-5 mt-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left: Brand -->
            <div class="col-md-4 mb-3 mb-md-0">
                <span style="color:#0B3D91; font-weight:700; font-size:1.2rem;">
                    Wire
                </span>
                <p class="small text-muted mb-0">
                    Helping students stay organised, confident and supported.
                </p>
            </div>

            <!-- Center: Policies -->
            <div class="col-md-4 text-md-center mb-3 mb-md-0">
                <a href="<?= base_url('privacy') ?>" class="text-decoration-none text-muted me-3">
                    Privacy Policy
                </a>
                <a href="<?= base_url('terms') ?>" class="text-decoration-none text-muted">
                    Terms of Use
                </a>
            </div>

            <!-- Right: Social Icons -->
            <div class="col-md-4 text-md-end">
                <a href="#" class="text-decoration-none me-3" style="color:#0B3D91;">
                    <i class="bi bi-instagram fs-5"></i>
                </a>
                <a href="#" class="text-decoration-none me-3" style="color:#0B3D91;">
                    <i class="bi bi-twitter-x fs-5"></i>
                </a>
                <a href="#" class="text-decoration-none me-3" style="color:#0B3D91;">
                    <i class="bi bi-linkedin fs-5"></i>
                </a>
                <a href="#" class="text-decoration-none" style="color:#D4AF37;">
                    <i class="bi bi-envelope-fill fs-5"></i>
                </a>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="text-center mt-4 small text-muted">
            © 2026 Wire. All rights reserved.
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
