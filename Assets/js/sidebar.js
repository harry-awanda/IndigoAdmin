/*
  Sidebar Manager
  Mengatur sidebar desktop collapse, mobile sidebar, overlay, dan active submenu.
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
      return;
    }

    openMobileSidebar();
  }

  function restoreDesktopSidebarState() {
    const savedState = localStorage.getItem(SIDEBAR_STORAGE_KEY);

    if (isDesktop() && savedState === 'true') {
      body.classList.add('sidebar-collapsed');
      return;
    }

    if (!isDesktop()) {
      body.classList.remove('sidebar-collapsed');
    }
  }

  function closeMobileSidebarOnMenuClick() {
    const menuLinks = sidebar.querySelectorAll('.sidebar-link:not(.sidebar-group-toggle)');

    menuLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        if (!isDesktop()) {
          closeMobileSidebar();
        }
      });
    });
  }

  function syncSubmenuButtonState() {
    const submenuList = sidebar.querySelectorAll('.sidebar-submenu');

    submenuList.forEach(function (submenu) {
      const submenuId = submenu.getAttribute('id');
      const toggleButton = sidebar.querySelector(`[data-bs-target="#${submenuId}"]`);

      if (!toggleButton) return;

      submenu.addEventListener('shown.bs.collapse', function () {
        toggleButton.setAttribute('aria-expanded', 'true');
      });

      submenu.addEventListener('hidden.bs.collapse', function () {
        toggleButton.setAttribute('aria-expanded', 'false');
      });
    });
  }

  function openActiveSubmenu() {
    const activeSubmenuLink = sidebar.querySelector('.sidebar-submenu .sidebar-link.active');

    if (!activeSubmenuLink) return;

    const activeSubmenu = activeSubmenuLink.closest('.sidebar-submenu');

    if (!activeSubmenu) return;

    const submenuId = activeSubmenu.getAttribute('id');
    const toggleButton = sidebar.querySelector(`[data-bs-target="#${submenuId}"]`);

    activeSubmenu.classList.add('show');

    if (toggleButton) {
      toggleButton.setAttribute('aria-expanded', 'true');
    }
  }

  function handleViewportChange() {
    if (isDesktop()) {
      closeMobileSidebar();
      restoreDesktopSidebarState();
      return;
    }

    body.classList.remove('sidebar-collapsed');
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

  if (desktopQuery.addEventListener) {
    desktopQuery.addEventListener('change', handleViewportChange);
  } else if (desktopQuery.addListener) {
    desktopQuery.addListener(handleViewportChange);
  }

  closeMobileSidebarOnMenuClick();
  syncSubmenuButtonState();
  openActiveSubmenu();
  restoreDesktopSidebarState();

  window.AppSidebar = {
    openMobile: openMobileSidebar,
    closeMobile: closeMobileSidebar,
    toggleDesktop: toggleDesktopSidebar
  };
})();