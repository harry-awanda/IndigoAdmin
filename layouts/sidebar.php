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
        <a
          href="#"
          class="sidebar-link sidebar-sublink <?= ($activePage ?? '') === 'students' ? 'active' : ''; ?>"
          title="Data Siswa"
        >
          <span>Data Siswa</span>
        </a>

        <a
          href="#"
          class="sidebar-link sidebar-sublink <?= ($activePage ?? '') === 'teachers' ? 'active' : ''; ?>"
          title="Data Guru"
        >
          <span>Data Guru</span>
        </a>

        <a
          href="#"
          class="sidebar-link sidebar-sublink <?= ($activePage ?? '') === 'classes' ? 'active' : ''; ?>"
          title="Data Kelas"
        >
          <span>Data Kelas</span>
        </a>
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