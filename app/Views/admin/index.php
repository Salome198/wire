<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container py-4">
    <div class="wire-card p-4 mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h1 class="h4 fw-bold mb-2" style="color:#0B3D91;">Admin Dashboard</h1>
                <p class="text-muted mb-0">
                    Review submitted support requests and manage internal support activity.
                </p>
            </div>

            <a href="<?= base_url('logout') ?>" class="btn wire-btn-gold">Logout</a>
        </div>
    </div>

    <div class="wire-card p-4">
        <h2 class="h6 fw-bold mb-3" style="color:#0B3D91;">Submitted Support Requests</h2>

        <?php if (!empty($requests)): ?>
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Submitted</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($requests as $request): ?>
                            <tr>
                                <td><?= esc($request['name']) ?></td>
                                <td><?= esc($request['email']) ?></td>
                                <td><?= esc($request['message']) ?></td>
                                <td><?= esc($request['created_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <p class="text-muted mb-0">No support requests submitted yet.</p>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>