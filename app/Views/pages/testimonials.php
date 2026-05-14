<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="container py-5">
    <div class="bg-white border rounded-4 p-5 shadow-sm">
        <div class="mb-5 text-center">
            <h1 class="fw-bold mb-3" style="color:#0B3D91;">What students value most</h1>
            <p class="text-muted mx-auto" style="max-width: 760px;">
                These reflections highlight the importance of clear planning tools, accessible support,
                and a simple digital space that helps students feel more organised and less overwhelmed.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="h-100 border rounded-4 p-4 bg-light position-relative shadow-sm">
                    <div class="mb-3" style="font-size:2rem; color:#D4AF37; line-height:1;">“</div>
                    <p class="fw-semibold mb-4" style="font-size:1.05rem;">
                        Having reminders and a weekly overview would help me manage deadlines without panic.
                    </p>
                    <div class="pt-2 border-top">
                        <div class="fw-bold" style="color:#0B3D91;">Vince Becker</div>
                        <small class="text-muted">Student perspective</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 border rounded-4 p-4 bg-light position-relative shadow-sm">
                    <div class="mb-3" style="font-size:2rem; color:#D4AF37; line-height:1;">“</div>
                    <p class="fw-semibold mb-4" style="font-size:1.05rem;">
                        A single dashboard would save time compared to checking multiple apps and emails.
                    </p>
                    <div class="pt-2 border-top">
                        <div class="fw-bold" style="color:#0B3D91;">James Weather</div>
                        <small class="text-muted">Student perspective</small>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 border rounded-4 p-4 bg-light position-relative shadow-sm">
                    <div class="mb-3" style="font-size:2rem; color:#D4AF37; line-height:1;">“</div>
                    <p class="fw-semibold mb-4" style="font-size:1.05rem;">
                        Students need quick access to support information when they feel overwhelmed.
                    </p>
                    <div class="pt-2 border-top">
                        <div class="fw-bold" style="color:#0B3D91;">Lana Clark</div>
                        <small class="text-muted">Student perspective</small>
                    </div>
                </div>
            </div>
        </div>

   <div id="reviewCarousel" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">

        <?php if (!empty($reviews)): ?>
            <?php foreach ($reviews as $index => $item): ?>
                <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                    <div class="border rounded-4 p-4 bg-light shadow-sm text-center mx-auto" style="max-width:700px;">
                        <div style="font-size:2rem; color:#D4AF37;">“</div>

                        <p class="fw-semibold fs-5 mb-3">
                            <?= esc($item['review']) ?>
                        </p>

                        <div class="pt-2 border-top">
                            <div class="fw-bold" style="color:#0B3D91;">
                                <?= esc($item['name']) ?>
                            </div>
                            <small class="text-muted">Student review</small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
    </button>
</div>

    <div class="mt-5 border rounded-4 p-4 bg-light">
        <h3 class="h5 fw-bold mb-3" style="color:#0B3D91;">Add your review</h3>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>

        <form action="<?= site_url('testimonials/submit') ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Your name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="review" class="form-label fw-semibold">Your review</label>
                <textarea name="review" id="review" rows="4" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn" style="background:#D4AF37; font-weight:800;">
                Submit review
            </button>
        </form>
    </div>

        <div class="mt-5 text-center">
            <p class="small mb-0" style="color:#0B3D91;">
                Wire is designed around simplicity, organisation, and accessible student support.
            </p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

