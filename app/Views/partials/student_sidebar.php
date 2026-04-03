<div class="wire-sidebar p-4 rounded-4 shadow-sm h-100 d-flex flex-column"
     style="background:linear-gradient(180deg, #0B3D91 0%, #124aa8 100%); min-height: 100%;">

    <div class="mb-4">
        <h3 class="fw-bold text-white mb-1">Wire</h3>
        <p class="mb-0" style="color:#D4AF37;">Student Area</p>
    </div>

    <hr class="border-light opacity-25">

    <ul class="nav flex-column gap-2 mb-4">
        <li><a href="<?= base_url('dashboard') ?>" class="nav-link text-white px-3 py-2 rounded-3">Dashboard</a></li>
        <li><a href="<?= base_url('reminders') ?>" class="nav-link text-white px-3 py-2 rounded-3">Reminders</a></li>
        <li><a href="<?= base_url('tasks') ?>" class="nav-link text-white px-3 py-2 rounded-3">Tasks</a></li>
        <li><a href="<?= base_url('timetable') ?>" class="nav-link text-white px-3 py-2 rounded-3">Timetable</a></li>
        <li><a href="<?= base_url('deadlines') ?>" class="nav-link text-white px-3 py-2 rounded-3">Deadlines</a></li>
        <li><a href="<?= base_url('resources') ?>" class="nav-link text-white px-3 py-2 rounded-3">Resources</a></li>
        <li><a href="<?= base_url('support') ?>" class="nav-link text-white px-3 py-2 rounded-3">Support</a></li>
        <li><a href="<?= base_url('settings') ?>" class="nav-link text-white px-3 py-2 rounded-3">Settings</a></li>
    </ul>

    <div class="mt-auto pt-3">
        <a href="<?= base_url('logout') ?>" class="btn w-100 rounded-3 fw-bold wire-btn-gold">
            Logout
        </a>
    </div>
</div>