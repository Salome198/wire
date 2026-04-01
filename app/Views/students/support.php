<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row g-4">
    <div class="col-lg-3">
        <?= $this->include('partials/student_sidebar') ?>
    </div>

    <div class="col-lg-9">

        <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-secondary mb-3">
            ← Back to Dashboard
        </a>

        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm" style="border-top:6px solid #0B3D91;">
            <h1 class="h4 fw-bold" style="color:#0B3D91;">Support</h1>
            <p class="text-muted mb-0">Find app help, student services and personal support contacts in one place.</p>
        </div>

        <!-- Wire App Support -->
        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Wire App Support</h2>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="border rounded-4 p-3 h-100">
                        <div class="fw-bold">Getting Started with Wire</div>
                        <p class="small text-muted">Learn how to use reminders, tasks, timetable and deadlines.</p>
                        <a href="<?= base_url('support/getting-started') ?>" class="btn btn-sm btn-outline-primary">View Help</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded-4 p-3 h-100">
                        <div class="fw-bold">Account & Settings Help</div>
                        <p class="small text-muted">Help with profile image, login, and navigating your dashboard.</p>
                        <a href="<?= base_url('support/account-help') ?>" class="btn btn-sm btn-outline-primary">Get Support</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Support Services -->
        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Student Support Services</h2>

            <div class="row g-3">
                <div class="col-md-6">
                    <div class="border rounded-4 p-3 h-100">
                        <div class="fw-bold">Wellbeing Support</div>
                        <p class="small text-muted">Mental health, counselling, and wellbeing services.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Open</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded-4 p-3 h-100">
                        <div class="fw-bold">Academic Skills</div>
                        <p class="small text-muted">Writing support, study skills and assignment guidance.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Open</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded-4 p-3 h-100">
                        <div class="fw-bold">Financial Support</div>
                        <p class="small text-muted">Budgeting, hardship support and student finance guidance.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Open</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="border rounded-4 p-3 h-100">
                        <div class="fw-bold">Careers Support</div>
                        <p class="small text-muted">CV support, employability guidance and job help.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Open</a>
                    </div>
                </div>
            </div>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= esc(session()->getFlashdata('success')) ?></div>
        <?php endif; ?>

        <!-- Add Personal Support -->
        <div class="bg-white border rounded-4 p-4 mb-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Add Personal Support Contact</h2>

            <form method="post" action="<?= base_url('support/create') ?>">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" name="support_type" class="form-control" placeholder="Support type (e.g. Wellbeing)" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="organisation" class="form-control" placeholder="Organisation" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="contact_info" class="form-control" placeholder="Phone or email">
                    </div>

                    <div class="col-md-6">
                        <input type="url" name="link" class="form-control" placeholder="https://example.com">
                    </div>

                    <div class="col-12">
                        <textarea name="notes" class="form-control" rows="3" placeholder="Optional notes"></textarea>
                    </div>
                </div>

                <button class="btn mt-3" style="background:#D4AF37; font-weight:800;">
                    Add Support
                </button>
            </form>
        </div>

        <!-- Saved Support Items -->
        <div class="bg-white border rounded-4 p-4 shadow-sm">
            <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">My Saved Support Items</h2>

            <?php if (!empty($supportItems)): ?>
                <div class="row g-3">
                    <?php foreach ($supportItems as $item): ?>
                        <div class="col-md-6">
                            <div class="border rounded-4 p-3 h-100">
                                <div class="fw-bold"><?= esc($item['support_type']) ?></div>
                                <div class="small text-muted"><?= esc($item['organisation']) ?></div>
                                <p class="small mt-2 mb-1"><?= esc($item['contact_info']) ?></p>
                                <p class="small"><?= esc($item['notes']) ?></p>

                                <?php if (!empty($item['link'])): ?>
                                    <a href="<?= esc($item['link']) ?>" target="_blank" class="btn btn-sm btn-outline-primary">
                                        Open Link
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-muted mb-0">No personal support items added yet.</p>
            <?php endif; ?>
        </div>

    </div>
</div>

<?= $this->endSection() ?>