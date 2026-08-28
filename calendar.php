<?php
$pageTitle = 'Calendar';
$pageDescription = 'Kalender aktivitas dengan daftar agenda dan grid mingguan.';
?>
<?php include __DIR__ . '/layouts/app-start.php'; ?>
<section class="sneat-page app-calendar-page">
  <div class="row g-4">
    <div class="col-12 col-xl-3"><div class="card app-card sneat-card"><div class="card-body"><button class="btn btn-primary w-100 mb-3"><i class="bi bi-plus-lg me-1"></i>Add Event</button><div class="calendar-filter"><label><input type="checkbox" checked> Classes</label><label><input type="checkbox" checked> Exams</label><label><input type="checkbox" checked> Meetings</label><label><input type="checkbox"> Holidays</label></div></div></div></div>
    <div class="col-12 col-xl-9"><div class="card app-card sneat-card"><div class="card-header app-card-header"><h5 class="mb-0">November 2026</h5><div class="btn-group"><button class="btn btn-light btn-sm">Month</button><button class="btn btn-primary btn-sm">Week</button><button class="btn btn-light btn-sm">Day</button></div></div><div class="card-body"><div class="calendar-grid"><strong>Mon</strong><strong>Tue</strong><strong>Wed</strong><strong>Thu</strong><strong>Fri</strong><span>Math class</span><span></span><span>UI workshop</span><span>Exam prep</span><span>Webinar</span></div></div></div></div>
  </div>
</section>
<?php include __DIR__ . '/layouts/app-end.php'; ?>
