<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="bg-white border rounded-4 p-5" style="border-top:6px solid #D4AF37;">
  <div class="row align-items-center g-4">
    <div class="col-lg-7">
      <h1 class="display-6 fw-bold" style="color:#0B3D91;">About Wire</h1>

      <p class="lead text-muted mt-3">
        Wire is a student support web application designed to help students stay organised, reduce stress,
        and feel supported throughout their academic journey.
      </p>

      <p class="text-muted mb-0" style="max-width:900px;">
        Many students juggle deadlines, part-time work, personal responsibilities, and wellbeing challenges.
        Wire brings key planning tools and support resources into one place so students can manage their time,
        track priorities, and access help quickly when it matters most.
      </p>

      <div class="d-flex flex-wrap gap-2 mt-4">
        <span class="badge" style="background:#0B3D91;">Organisation</span>
        <span class="badge" style="background:#0B3D91;">Wellbeing Support</span>
        <span class="badge" style="background:#0B3D91;">Student-Friendly Design</span>
        <span class="badge" style="background:#0B3D91;">Secure Dashboard</span>
      </div>
    </div>

    <div class="col-lg-5">
      <!-- Image placeholder - add your image later -->
      <div class="border rounded-4 p-4" style="background:#F3F7FF;">
        <div class="d-flex justify-content-between align-items-center">
          <strong style="color:#0B3D91;">Wire Preview</strong>
          <span class="badge" style="background:#D4AF37; color:#111;">New</span>
        </div>

        <p class="text-muted mt-2 mb-3">
          Add an image or dashboard mock-up here to show what students will experience.
        </p>

        <div class="border rounded-3 bg-white d-flex align-items-center justify-content-center" style="height:220px;">
          <span class="text-muted">Place image here: <br><small>public/assets/img/about-preview.jpg</small></span>
        </div>

        <!-- When you have an image, replace the box above with this:
        <img src="<?= base_url('assets/img/about-preview.jpg') ?>" class="img-fluid rounded-3" alt="Wire dashboard preview">
        -->
      </div>
    </div>
  </div>
</section>

<!-- WHY WIRE -->
<section class="bg-white border rounded-4 p-5 mt-4" style="border-left:6px solid #0B3D91;">
  <h2 class="h4 fw-bold" style="color:#0B3D91;">Why Wire exists</h2>
  <p class="text-muted mt-2 mb-4" style="max-width:950px;">
    Students often use multiple tools across different platforms — notes apps, calendars, emails, learning portals,
    and separate wellbeing links. This can feel fragmented and overwhelming. Wire simplifies this by offering one place
    to manage key tasks and access relevant support quickly.
  </p>

  <div class="row g-3">
    <div class="col-md-4">
      <div class="border rounded-4 p-4 h-100" style="background:#FDF6E5;">
        <h3 class="h6 fw-bold mb-2" style="color:#0B3D91;">Reduce overwhelm</h3>
        <p class="text-muted mb-0">
          A simple dashboard helps students see what’s next without information overload.
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="border rounded-4 p-4 h-100" style="background:#F3F7FF;">
        <h3 class="h6 fw-bold mb-2" style="color:#0B3D91;">Stay on track</h3>
        <p class="text-muted mb-0">
          Reminders and deadlines help students keep consistent progress across modules.
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="border rounded-4 p-4 h-100" style="background:#FDF6E5;">
        <h3 class="h6 fw-bold mb-2" style="color:#0B3D91;">Access support</h3>
        <p class="text-muted mb-0">
          Key academic and wellbeing resources are easy to find when students need help.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES LIST -->
<section class="row g-4 mt-4">
  <div class="col-md-6">
    <div class="bg-white border rounded-4 p-5 h-100">
      <h2 class="h5 fw-bold" style="color:#0B3D91;">Core features</h2>
      <ul class="text-muted mt-3 mb-0">
        <li>Student dashboard overview (upcoming tasks and deadlines)</li>
        <li>Reminders and task tracking</li>
        <li>Quick access to support links (wellbeing, academic help)</li>
        <li>Personal notes and priorities (planned)</li>
        <li>Secure login area for students (planned)</li>
      </ul>
    </div>
  </div>

  <div class="col-md-6">
    <div class="bg-white border rounded-4 p-5 h-100">
      <h2 class="h5 fw-bold" style="color:#0B3D91;">Design principles</h2>
      <ul class="text-muted mt-3 mb-0">
        <li>Simple and easy navigation</li>
        <li>Clear visual hierarchy (what matters first)</li>
        <li>Supportive tone and student-friendly wording</li>
        <li>Accessible colours and readable text</li>
        <li>Privacy and security considered during development</li>
      </ul>
    </div>
  </div>
</section>

<!-- TEAM SECTION -->
<section class="bg-white border rounded-4 p-5 mt-4" style="border-top:6px solid #0B3D91;">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color:#0B3D91;">Meet the Team Behind Wire</h2>
        <p class="text-muted" style="max-width:750px; margin:auto;">
            Wire is built by individuals who understand student challenges first-hand.
            Our focus is creating a supportive, simple and practical digital experience.
        </p>
    </div>

    <div class="row g-4">

        <!-- Team Member 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <img src="<?= base_url('assets/img/founder.jpeg') ?>" 
                     class="card-img-top" 
                     style="height:260px; object-fit:cover;"
                     alt="Founder">
                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1" style="color:#0B3D91;">Founder</h5>
                    <p class="text-muted small">
                        Vision and product direction. Focused on student wellbeing and structure.
                    </p>
                </div>
            </div>
        </div>

        <!-- Team Member 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <img src="<?= base_url('assets/img/uxdesigner.jpeg') ?>" 
                     class="card-img-top" 
                     style="height:260px; object-fit:cover;"
                     alt="UI Designer">
                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1" style="color:#0B3D91;">UI Designer</h5>
                    <p class="text-muted small">
                        Ensures Wire remains clean, accessible and student-friendly.
                    </p>
                </div>
            </div>
        </div>

        <!-- Team Member 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <img src="<?= base_url('assets/img/developer.jpeg') ?>" 
                     class="card-img-top" 
                     style="height:260px; object-fit:cover;"
                     alt="Developer">
                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1" style="color:#0B3D91;">Developer</h5>
                    <p class="text-muted small">
                        Builds the secure student dashboard and system features.
                    </p>
                </div>
            </div>
        </div>

        <!-- Team Member 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden">
                <img src="<?= base_url('assets/img/student.jpeg') ?>" 
                     class="card-img-top" 
                     style="height:260px; object-fit:cover;"
                     alt="Support">
                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1" style="color:#0B3D91;">Student Support</h5>
                    <p class="text-muted small">
                        Focused on ensuring Wire reflects real student needs.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- CTA -->
<section class="bg-white border rounded-4 p-5 mt-4">
  <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
    <div>
      <h2 class="h5 fw-bold mb-1" style="color:#0B3D91;">Start using Wire</h2>
      <p class="text-muted mb-0">
        Create an account to access your dashboard and begin organising your academic routine.
      </p>
    </div>
    <div class="d-flex gap-2">
      <a class="btn" style="background:#D4AF37; font-weight:800;" href="<?= base_url('register') ?>">Create account</a>
      <a class="btn btn-outline-primary" href="<?= base_url('login') ?>">Login</a>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
