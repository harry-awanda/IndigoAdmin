<header class="app-topbar">
  <div class="topbar-left">
    <button type="button" class="topbar-toggle" id="sidebarToggle" aria-label="Toggle sidebar">
      <i class="bi bi-list"></i>
    </button>

    <div class="topbar-page-title d-none d-lg-block"><?= $pageTitle; ?></div>

    <div class="topbar-search d-none d-md-flex">
      <i class="bi bi-search"></i>
      <input type="text" placeholder="Cari sesuatu...">
    </div>
  </div>

  <div class="topbar-right">
    <button class="topbar-icon-btn d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch" aria-label="Buka pencarian">
      <i class="bi bi-search"></i>
    </button>

    <?php include __DIR__ . '/../partials/theme-switcher.php'; ?>
    <?php include __DIR__ . '/../partials/notification-dropdown.php'; ?>
    <?php include __DIR__ . '/../partials/user-dropdown.php'; ?>
  </div>
</header>

<div class="topbar-mobile-search collapse" id="mobileSearch">
  <div class="topbar-search-mobile-inner">
    <i class="bi bi-search"></i>
    <input type="text" placeholder="Cari sesuatu...">
  </div>
</div>

