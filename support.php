<?php
$pageTitle = 'Support';
$pageDescription = 'Pusat bantuan dengan tiket, prioritas, dan artikel populer.';
?>
<?php include __DIR__ . '/layouts/app-start.php'; ?>
<section class="sneat-page support-page">
  <div class="row g-4">
    <div class="col-12 col-xl-4"><div class="card app-card sneat-card h-100"><div class="card-body"><div class="icon-box mb-3"><i class="bi bi-life-preserver"></i></div><h5>How can we help?</h5><p class="text-app-secondary">Cari dokumentasi atau buat tiket baru untuk kebutuhan admin template.</p><div class="topbar-search w-100"><i class="bi bi-search"></i><input type="text" placeholder="Search help center"></div></div></div></div>
    <div class="col-12 col-xl-8"><div class="card app-card sneat-card"><div class="card-header app-card-header"><h5 class="mb-0">Open Tickets</h5><button class="btn btn-primary btn-sm"><i class="bi bi-plus-lg me-1"></i>New Ticket</button></div><div class="card-body p-0"><div class="ticket-list"><div class="ticket-item"><span class="badge badge-soft-danger">High</span><div><strong>Sidebar item missing</strong><p>Need to align navigation with Sneat.</p></div><span>Today</span></div><div class="ticket-item"><span class="badge badge-soft-warning">Medium</span><div><strong>Calendar preview</strong><p>Static calendar component request.</p></div><span>Yesterday</span></div><div class="ticket-item"><span class="badge badge-soft-success">Low</span><div><strong>Documentation polish</strong><p>Improve reusable page guidelines.</p></div><span>2d</span></div></div></div></div></div>
  </div>
</section>
<?php include __DIR__ . '/layouts/app-end.php'; ?>
