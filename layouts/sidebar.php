<aside class="app-sidebar" id="appSidebar">
  <div class="sidebar-header">
    <a href="index.php" class="sidebar-brand">
      <span class="sidebar-logo">
        <i class="bi bi-mortarboard-fill"></i>
      </span>

      <span class="sidebar-brand-text">School Admin</span>
    </a>

    <button type="button" class="sidebar-close d-lg-none" id="sidebarClose" aria-label="Tutup sidebar">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>

  <div class="sidebar-body">
    <nav class="sidebar-menu">

      <div class="sidebar-menu-label">Menu Utama</div>

      <a
        href="index.php"
        class="sidebar-link <?= ($activePage ?? '') === 'dashboard' ? 'active' : ''; ?>"
        title="Dashboard"
      >
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
      </a>
      <button
        class="sidebar-link sidebar-group-toggle <?= ($activePage ?? '') === 'components' ? 'active' : ''; ?>"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#componentsMenu"
        aria-expanded="<?= ($activePage ?? '') === 'components' ? 'true' : 'false'; ?>"
        aria-controls="componentsMenu"
        data-sidebar-title="Components"
      >
        <i class="bi bi-grid-1x2"></i>
        <span>Components</span>
        <i class="bi bi-chevron-down sidebar-chevron"></i>
      </button>

      <div class="sidebar-submenu collapse <?= ($activePage ?? '') === 'components' ? 'show' : ''; ?>" id="componentsMenu">
        <div class="sidebar-submenu-inner">

          <a
            href="index.php?page=component-cards"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'cards' ? 'active' : ''; ?>"
            data-sidebar-title="Cards"
          >
            <span>Cards</span>
          </a>

          <a
            href="index.php?page=component-buttons"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'buttons' ? 'active' : ''; ?>"
            data-sidebar-title="Buttons"
          >
            <span>Buttons</span>
          </a>

          <a
            href="index.php?page=component-alerts"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'alerts' ? 'active' : ''; ?>"
            data-sidebar-title="Alerts"
          >
            <span>Alerts</span>
          </a>

          <a
            href="index.php?page=component-toasts"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'toasts' ? 'active' : ''; ?>"
            data-sidebar-title="Toasts"
          >
            <span>Toasts</span>
          </a>

          <a
            href="index.php?page=component-badges"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'badges' ? 'active' : ''; ?>"
            data-sidebar-title="Badges"
          >
            <span>Badges</span>
          </a>

          <a
            href="index.php?page=component-dropdowns"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'dropdowns' ? 'active' : ''; ?>"
            data-sidebar-title="Dropdowns"
          >
            <span>Dropdowns</span>
          </a>

          <a
            href="index.php?page=component-modals"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'modals' ? 'active' : ''; ?>"
            data-sidebar-title="Modals"
          >
            <span>Modals</span>
          </a>

          <a
            href="index.php?page=component-forms"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'forms' ? 'active' : ''; ?>"
            data-sidebar-title="Forms"
          >
            <span>Forms</span>
          </a>

          <a
            href="index.php?page=component-tables"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'tables' ? 'active' : ''; ?>"
            data-sidebar-title="Tables"
          >
            <span>Tables</span>
          </a>

          <a
            href="index.php?page=component-pagination"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'pagination' ? 'active' : ''; ?>"
            data-sidebar-title="Pagination"
          >
            <span>Pagination</span>
          </a>

          <a
            href="index.php?page=component-empty-state"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'empty-state' ? 'active' : ''; ?>"
            data-sidebar-title="Empty State"
          >
            <span>Empty State</span>
          </a>

          <a
            href="index.php?page=component-utilities"
            class="sidebar-link sidebar-sublink <?= ($activeChild ?? '') === 'utilities' ? 'active' : ''; ?>"
            data-sidebar-title="Utilities"
          >
            <span>Utilities</span>
          </a>

        </div>
      </div>
      <button
        class="sidebar-link sidebar-group-toggle"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#masterDataMenu"
        aria-expanded="true"
        aria-controls="masterDataMenu"
        title="Master Data"
      >
        <i class="bi bi-folder2-open"></i>
        <span>Master Data</span>
        <i class="bi bi-chevron-down sidebar-chevron"></i>
      </button>

      <div class="sidebar-submenu collapse show" id="masterDataMenu">
        <div class="sidebar-submenu-inner">
          <a
            href="#"
            class="sidebar-link sidebar-sublink <?= ($activePage ?? '') === 'students' ? 'active' : ''; ?>"
            data-sidebar-title="Data Siswa"
          >
            <span>Data Siswa</span>
          </a>

          <a
            href="#"
            class="sidebar-link sidebar-sublink <?= ($activePage ?? '') === 'teachers' ? 'active' : ''; ?>"
            data-sidebar-title="Data Guru"
          >
            <span>Data Guru</span>
          </a>

          <a
            href="#"
            class="sidebar-link sidebar-sublink <?= ($activePage ?? '') === 'classes' ? 'active' : ''; ?>"
            data-sidebar-title="Data Kelas"
          >
            <span>Data Kelas</span>
          </a>
        </div>
      </div>

      <a
        href="#"
        class="sidebar-link <?= ($activePage ?? '') === 'attendance' ? 'active' : ''; ?>"
        title="Presensi"
      >
        <i class="bi bi-calendar-check"></i>
        <span>Presensi</span>
      </a>

      <a
        href="#"
        class="sidebar-link <?= ($activePage ?? '') === 'reports' ? 'active' : ''; ?>"
        title="Laporan"
      >
        <i class="bi bi-file-earmark-text"></i>
        <span>Laporan</span>
      </a>

      <div class="sidebar-menu-label">Manajemen</div>

      <a
        href="#"
        class="sidebar-link <?= ($activePage ?? '') === 'users' ? 'active' : ''; ?>"
        title="Manajemen User"
      >
        <i class="bi bi-person-gear"></i>
        <span>Manajemen User</span>
      </a>

      <a
        href="#"
        class="sidebar-link <?= ($activePage ?? '') === 'settings' ? 'active' : ''; ?>"
        title="Pengaturan"
      >
        <i class="bi bi-gear"></i>
        <span>Pengaturan</span>
      </a>

    </nav>
  </div>
</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>