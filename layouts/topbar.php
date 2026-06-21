<header class="app-topbar">
  <div class="topbar-left">
    <button type="button" class="topbar-toggle" id="sidebarToggle">
      <i class="bi bi-list"></i>
    </button>

    <div class="topbar-search d-none d-md-flex">
      <i class="bi bi-search"></i>
      <input type="text" placeholder="Cari sesuatu...">
    </div>
  </div>

  <div class="topbar-right">
    <?php include __DIR__ . '/../partials/theme-switcher.php'; ?>

    <?php include __DIR__ . '/../partials/notification-dropdown.php'; ?>

    <?php include __DIR__ . '/../partials/user-dropdown.php'; ?>
  </div>
</header>