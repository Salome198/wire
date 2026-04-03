<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= esc($title ?? 'Wire') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
        background: #f5f7fb !important;
        font-family: Arial, Helvetica, sans-serif;
    }

    .wire-sidebar .nav-link:hover,
    .wire-sidebar .nav-link.active {
        background: rgba(255,255,255,0.12);
        transition: 0.2s ease;
    }

    .wire-card {
        border: 1px solid #e5e7eb;
        border-radius: 20px;
        background: #ffffff;
        box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
    }

    .wire-soft-card {
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        background: #ffffff;
    }

    .wire-section-title {
        color: #0B3D91;
        font-weight: 700;
    }

    .wire-btn-gold {
        background: #D4AF37;
        color: #111827;
        font-weight: 700;
        border: none;
        border-radius: 10px;
    }

    .wire-btn-gold:hover {
        background: #c29b1d;
        color: #111827;
    }

    .wire-stat-number {
        color: #0B3D91;
        font-size: 1.8rem;
        font-weight: 800;
    }

    .wire-topbar-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #D4AF37;
    }
</style>
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
   <?php if (session()->get('is_logged_in')): ?>

  <?php
    $profileImage = session()->get('profile_image');
    $avatar = !empty($profileImage)
      ? base_url('assets/img/profiles/' . $profileImage)
      : base_url('assets/img/profile_avatar.jpeg');
  ?>

  <a class="btn btn-link text-white text-decoration-none"
     href="<?= base_url('dashboard') ?>">
     Dashboard
  </a>

  <a href="<?= base_url('settings') ?>" class="d-flex align-items-center text-decoration-none">
    <img src="<?= $avatar ?>"
         alt="Profile"
         style="width:34px;height:34px;object-fit:cover;border-radius:50%;border:2px solid #D4AF37;">
  </a>

  <a class="btn btn-outline-light"
     href="<?= base_url('logout') ?>">
     Logout
  </a>

<?php else: ?>

  <a class="btn btn-outline-light" href="<?= base_url('login') ?>">Login</a>
  <a class="btn" style="background:#D4AF37; font-weight:800;" href="<?= base_url('register') ?>">Register</a>

<?php endif; ?>
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
