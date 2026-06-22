<?php
$pages = [
  'dashboard' => [
    'title' => 'Dashboard',
    'description' => 'Ringkasan informasi dan aktivitas sistem.',
    'action_label' => 'Export Laporan',
    'action_icon' => 'bi bi-download',
    'action_url' => '#',
    'active' => 'dashboard',
    'active_child' => null,
    'content' => 'pages/dashboard.php',
  ],

  'component-cards' => [
    'title' => 'Cards',
    'description' => 'Komponen card untuk dashboard, detail data, dan container konten.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'cards',
    'content' => 'pages/components/cards.php',
  ],

  'component-buttons' => [
    'title' => 'Buttons',
    'description' => 'Komponen tombol untuk aksi utama, sekunder, dan aksi data.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'buttons',
    'content' => 'pages/components/buttons.php',
  ],

  'component-alerts' => [
    'title' => 'Alerts',
    'description' => 'Komponen pesan informasi, peringatan, sukses, dan error.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'alerts',
    'content' => 'pages/components/alerts.php',
  ],

  'component-toasts' => [
    'title' => 'Toasts',
    'description' => 'Komponen notifikasi kecil untuk feedback aksi pengguna.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'toasts',
    'content' => 'pages/components/toasts.php',
  ],

  'component-badges' => [
    'title' => 'Badges',
    'description' => 'Komponen label kecil untuk status dan kategori data.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'badges',
    'content' => 'pages/components/badges.php',
  ],

  'component-dropdowns' => [
    'title' => 'Dropdowns',
    'description' => 'Komponen menu dropdown untuk aksi dan navigasi kecil.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'dropdowns',
    'content' => 'pages/components/dropdowns.php',
  ],

  'component-modals' => [
    'title' => 'Modals',
    'description' => 'Komponen dialog untuk detail data, form, dan konfirmasi.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'modals',
    'content' => 'pages/components/modals.php',
  ],

  'component-forms' => [
    'title' => 'Forms',
    'description' => 'Komponen input untuk form data admin.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'forms',
    'content' => 'pages/components/forms.php',
  ],

  'component-tables' => [
    'title' => 'Tables',
    'description' => 'Komponen tabel responsif untuk menampilkan data admin.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'tables',
    'content' => 'pages/components/tables.php',
  ],

  'component-pagination' => [
    'title' => 'Pagination',
    'description' => 'Komponen navigasi halaman untuk data tabel.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'pagination',
    'content' => 'pages/components/pagination.php',
  ],

  'component-empty-state' => [
    'title' => 'Empty State',
    'description' => 'Komponen tampilan saat data kosong atau tidak ditemukan.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'empty-state',
    'content' => 'pages/components/empty-state.php',
  ],

  'component-utilities' => [
    'title' => 'Utilities',
    'description' => 'Komponen kecil seperti avatar, status dot, icon box, dan helper UI.',
    'action_label' => null,
    'action_icon' => null,
    'action_url' => '#',
    'active' => 'components',
    'active_child' => 'utilities',
    'content' => 'pages/components/utilities.php',
  ],
];

$currentPage = $_GET['page'] ?? 'dashboard';

if (!array_key_exists($currentPage, $pages)) {
  $currentPage = 'dashboard';
}

$pageConfig = $pages[$currentPage];

$pageTitle = $pageConfig['title'];
$pageDescription = $pageConfig['description'];

$pageActionLabel = $pageConfig['action_label'];
$pageActionIcon = $pageConfig['action_icon'];
$pageActionUrl = $pageConfig['action_url'];

$activePage = $pageConfig['active'];
$activeChild = $pageConfig['active_child'];
$contentPage = $pageConfig['content'];
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
  <?php include __DIR__ . '/partials/toast-container.php'; ?>
  <?php include __DIR__ . '/partials/scripts.php'; ?>
</body>
</html>