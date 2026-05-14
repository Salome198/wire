<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <div class="mb-3">
    <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary btn-sm">
        ← Return to Dashboard
    </a>
</div>
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
        <h2 class="mb-0">Campus Map Navigation</h2>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <p class="text-muted mb-3">
                Use the campus map to find key university locations and support services.
            </p>

            <div class="d-flex flex-wrap gap-2 mb-3">
                <a href="https://www.google.com/maps?q=University+of+Wolverhampton+Library" target="_blank" class="btn btn-outline-primary btn-sm">
                    Library
                </a>
                <a href="https://www.google.com/maps?q=University+of+Wolverhampton+Student+Union" target="_blank" class="btn btn-outline-primary btn-sm">
                    Student Union
                </a>
                <a href="https://www.google.com/maps?q=University+of+Wolverhampton+Wellbeing" target="_blank" class="btn btn-outline-primary btn-sm">
                    Wellbeing Support
                </a>
                <a href="https://www.google.com/maps?q=University+of+Wolverhampton+Accommodation+Office" target="_blank" class="btn btn-outline-primary btn-sm">
                    Accommodation
                </a>
            </div>

         <form method="get" class="mb-3">
                <div class="input-group">
                    <input 
                        type="text" 
                        name="location" 
                        class="form-control" 
                        placeholder="Search campus location..."
                        value="<?= esc($_GET['location'] ?? '') ?>">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
        </form>

            <div class="ratio ratio-16x9">
                <?php
            $location = $_GET['location'] ?? 'University of Wolverhampton';
            ?>
            <div class="ratio ratio-16x9">
                <iframe
                    src="https://www.google.com/maps?q=<?= urlencode($location) ?>&output=embed"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>