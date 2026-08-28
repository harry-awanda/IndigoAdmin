<?php
$pageTitle = 'Documentation';
$pageDescription = 'Dokumentasi struktur template, include, dan aturan static-friendly PHP.';
?>
<?php include __DIR__ . '/layouts/app-start.php'; ?>
<section class="sneat-page docs-page">
  <div class="row g-4">
    <div class="col-12 col-xl-3"><div class="card app-card sneat-card docs-nav"><a href="documentation.php" class="app-nav-item active">Overview</a><a href="documentation.php" class="app-nav-item">Layouts</a><a href="documentation.php" class="app-nav-item">Components</a><a href="documentation.php" class="app-nav-item">Static Export</a></div></div>
    <div class="col-12 col-xl-9"><div class="card app-card sneat-card"><div class="card-body"><span class="badge badge-soft-primary mb-3">IndigoAdmin</span><h4>Static-friendly PHP rules</h4><p class="text-app-secondary">PHP dipakai untuk menyusun partial berulang, sementara markup halaman tetap statis agar mudah ditulis ulang ke HTML.</p><div class="docs-step"><span>1</span><div><strong>Use page wrappers</strong><p>Set title and description, include app start, include content, include app end.</p></div></div><div class="docs-step"><span>2</span><div><strong>Avoid dynamic state</strong><p>Active menu, dummy data, and layout variants stay as explicit markup.</p></div></div><div class="docs-step"><span>3</span><div><strong>Keep links direct</strong><p>Every visible menu item points to a real PHP file or an intentional placeholder.</p></div></div></div></div></div>
  </div>
</section>
<?php include __DIR__ . '/layouts/app-end.php'; ?>
