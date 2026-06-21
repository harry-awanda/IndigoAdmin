/*
  Sidebar Manager
  Mengatur sidebar desktop collapse dan mobile sidebar.
*/

(function () {
  const SIDEBAR_STORAGE_KEY = 'app-sidebar-collapsed';

  const body = document.body;
  const sidebar = document.getElementById('appSidebar');
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebarClose = document.getElementById('sidebarClose');
  const sidebarOverlay = document.getElementById('sidebarOverlay');

  const desktopQuery = window.matchMedia('(min-width: 992px)');

  if (!sidebar || !sidebarToggle || !sidebarOverlay) return;

  function isDesktop() {
    return desktopQuery.matches;
  }

  function openMobileSidebar() {
    sidebar.classList.add('show');
    sidebarOverlay.classList.add('show');
    body.classList.add('mobile-sidebar-open');
  }

  function closeMobileSidebar() {
    sidebar.classList.remove('show');
    sidebarOverlay.classList.remove('show');
    body.classList.remove('mobile-sidebar-open');
  }

  function toggleDesktopSidebar() {
    body.classList.toggle('sidebar-collapsed');

    const isCollapsed = body.classList.contains('sidebar-collapsed');
    localStorage.setItem(SIDEBAR_STORAGE_KEY, isCollapsed ? 'true' : 'false');
  }

  function handleSidebarToggle() {
    if (isDesktop()) {
      toggleDesktopSidebar();
    } else {
      openMobileSidebar();
    }
  }

  function restoreDesktopSidebarState() {
    const savedState = localStorage.getItem(SIDEBAR_STORAGE_KEY);

    if (savedState === 'true' && isDesktop()) {
      body.classList.add('sidebar-collapsed');
    }

    if (!isDesktop()) {
      body.classList.remove('sidebar-collapsed');
    }
  }

  sidebarToggle.addEventListener('click', handleSidebarToggle);

  if (sidebarClose) {
    sidebarClose.addEventListener('click', closeMobileSidebar);
  }

  sidebarOverlay.addEventListener('click', closeMobileSidebar);

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      closeMobileSidebar();
    }
  });

  window.addEventListener('resize', function () {
    if (isDesktop()) {
      closeMobileSidebar();
    } else {
      body.classList.remove('sidebar-collapsed');
    }
  });

  desktopQuery.addEventListener('change', restoreDesktopSidebarState);

  restoreDesktopSidebarState();
})();