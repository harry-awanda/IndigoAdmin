<?php
$pageTitle = 'Dashboard';
$pageDescription = 'Ringkasan informasi dan aktivitas sistem.';

$pageActionLabel = 'Export Laporan';
$pageActionIcon = 'bi bi-download';
$pageActionUrl = '#';

$activePage = 'dashboard';
$contentPage = 'pages/dashboard.php';
?>

<?php include __DIR__ . '/partials/head.php'; ?>

<body>
  <div class="app-wrapper">

    <?php include __DIR__ . '/layouts/sidebar.php'; ?>

    <div class="app-main">

      <?php include __DIR__ . '/layouts/topbar.php'; ?>

      <main class="app-content">
        <?php include __DIR__ . '/layouts/breadcrumb.php'; ?>

        <?php include __DIR__ . '/partials/page-header.php'; ?>

        <?php
          $contentPath = __DIR__ . '/' . $contentPage;

          if (file_exists($contentPath)) {
            include $contentPath;
          } else {
            echo '<div class="alert alert-danger">Halaman tidak ditemukan.</div>';
          }
        ?>
      </main>

      <?php include __DIR__ . '/layouts/footer.php'; ?>

    </div>
  </div>

  <?php include __DIR__ . '/partials/scripts.php'; ?>
</body>
</html>