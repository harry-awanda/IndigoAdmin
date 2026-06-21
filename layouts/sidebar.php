<aside class="app-sidebar" id="appSidebar">
  <div class="sidebar-header">
    <a href="index.php" class="sidebar-brand">
      <span class="sidebar-logo">
        <i class="bi bi-mortarboard-fill"></i>
      </span>
      <span class="sidebar-brand-text">School Admin</span>
    </a>

    <button type="button" class="sidebar-close d-lg-none" id="sidebarClose">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>

  <nav class="sidebar-menu">
    <div class="sidebar-menu-label">Menu Utama</div>

    <a href="index.php" class="sidebar-link <?= ($activePage ?? '') === 'dashboard' ? 'active' : ''; ?>">
      <i class="bi bi-speedometer2"></i>
      <span>Dashboard</span>
    </a>

    <a href="#" class="sidebar-link <?= ($activePage ?? '') === 'students' ? 'active' : ''; ?>">
      <i class="bi bi-people"></i>
      <span>Data Siswa</span>
    </a>

    <a href="#" class="sidebar-link <?= ($activePage ?? '') === 'teachers' ? 'active' : ''; ?>">
      <i class="bi bi-person-badge"></i>
      <span>Data Guru</span>
    </a>

    <a href="#" class="sidebar-link <?= ($activePage ?? '') === 'classes' ? 'active' : ''; ?>">
      <i class="bi bi-building"></i>
      <span>Data Kelas</span>
    </a>

    <a href="#" class="sidebar-link <?= ($activePage ?? '') === 'attendance' ? 'active' : ''; ?>">
      <i class="bi bi-calendar-check"></i>
      <span>Presensi</span>
    </a>

    <div class="sidebar-menu-label">Pengaturan</div>

    <a href="#" class="sidebar-link <?= ($activePage ?? '') === 'settings' ? 'active' : ''; ?>">
      <i class="bi bi-gear"></i>
      <span>Pengaturan</span>
    </a>
  </nav>
</aside>

<div class="sidebar-overlay" id="sidebarOverlay"></div>