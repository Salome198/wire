<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="container py-5">
    <div class="bg-white border rounded-4 p-5 shadow-sm">
        <div class="text-center mb-5">
            <h1 class="fw-bold mb-3" style="color:#0B3D91;">Trusted Support Partners</h1>
            <p class="text-muted mx-auto" style="max-width: 760px;">
                Wire signposts students to trusted support services commonly needed during university life,
                helping them find academic, wellbeing, and practical guidance more easily.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="h-100 border rounded-4 p-4 bg-light shadow-sm">
                    <div class="mb-3" style="font-size: 2rem;">🎓</div>
                    <h5 class="fw-bold mb-3" style="color:#0B3D91;">Student Services</h5>
                    <p class="text-muted mb-0">
                        Guidance on academic processes, student welfare, university support structures,
                        and general study-related assistance.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 border rounded-4 p-4 bg-light shadow-sm">
                    <div class="mb-3" style="font-size: 2rem;">💙</div>
                    <h5 class="fw-bold mb-3" style="color:#0B3D91;">Wellbeing Support</h5>
                    <p class="text-muted mb-0">
                        Access routes to wellbeing resources, counselling services, emotional support,
                        and mental health guidance.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="h-100 border rounded-4 p-4 bg-light shadow-sm">
                    <div class="mb-3" style="font-size: 2rem;">📘</div>
                    <h5 class="fw-bold mb-3" style="color:#0B3D91;">Study Skills</h5>
                    <p class="text-muted mb-0">
                        Support for time management, writing skills, revision strategies,
                        and academic development.
                    </p>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-1">
            <div class="col-md-6">
                <div class="h-100 border rounded-4 p-4 bg-light shadow-sm">
                    <div class="mb-3" style="font-size: 2rem;">🏠</div>
                    <h5 class="fw-bold mb-3" style="color:#0B3D91;">Accommodation Guidance</h5>
                    <p class="text-muted mb-0">
                        Support for finding accommodation-related information, housing advice,
                        and useful signposting for students settling into university life.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="h-100 border rounded-4 p-4 bg-light shadow-sm">
                    <div class="mb-3" style="font-size: 2rem;">🧭</div>
                    <h5 class="fw-bold mb-3" style="color:#0B3D91;">Orientation & Guidance</h5>
                    <p class="text-muted mb-0">
                        Practical direction for new students, helping them understand where to go,
                        what support is available, and how to access it quickly.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-5 border rounded-4 p-4 text-center" style="background:#F8FAFD;">
            <h6 class="fw-bold mb-2" style="color:#0B3D91;">Partner links and referrals</h6>
            <p class="text-muted mb-0">
                Verified partner links can be added during final evaluation and testing to ensure
                accuracy, trustworthiness, and relevance to student needs.
            </p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
