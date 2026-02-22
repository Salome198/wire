<div class="d-flex flex-column p-3 text-white rounded-4" style="background:#0B3D91; min-height: 80vh;">
  <a href="<?= base_url('dashboard') ?>" class="text-white text-decoration-none mb-3">
    <span class="fw-bold fs-4">Wire</span>
    <div class="small" style="color:#D4AF37;">Student Area</div>
  </a>

  <hr class="text-white">

  <ul class="nav nav-pills flex-column mb-auto gap-2">
    <li><a href="<?= base_url('dashboard') ?>" class="nav-link text-white">Dashboard</a></li>
    <li><a href="#" class="nav-link text-white">Reminders</a></li>
    <li><a href="#" class="nav-link text-white">Tasks</a></li>
    <li><a href="#" class="nav-link text-white">Timetable</a></li>
    <li><a href="#" class="nav-link text-white">Deadlines</a></li>
    <li><a href="#" class="nav-link text-white">Resources</a></li>
    <li><a href="#" class="nav-link text-white">Support</a></li>
    <li><a href="<?= base_url('settings') ?>" class="nav-link text-white">Settings</a></li>
  </ul>

  <hr class="text-white">

  <a href="<?= base_url('logout') ?>" class="btn w-100" style="background:#D4AF37; font-weight:800;">
    Logout
  </a>
</div>