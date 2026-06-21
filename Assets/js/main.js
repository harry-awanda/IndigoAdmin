/*
  Main Script
  Mengatur inisialisasi Bootstrap, active menu helper, search mobile, dan utility kecil.
*/

(function () {
  function initTooltips() {
    if (typeof bootstrap === 'undefined') return;

    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');

    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });
  }

  function initPopovers() {
    if (typeof bootstrap === 'undefined') return;

    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');

    popoverTriggerList.forEach(function (popoverTriggerEl) {
      new bootstrap.Popover(popoverTriggerEl);
    });
  }

  function initMobileSearchFocus() {
    const mobileSearch = document.getElementById('mobileSearch');

    if (!mobileSearch) return;

    mobileSearch.addEventListener('shown.bs.collapse', function () {
      const input = mobileSearch.querySelector('input');

      if (input) {
        input.focus();
      }
    });
  }

  function initActiveMenuByUrl() {
    const currentPath = window.location.pathname.split('/').pop() || 'index.php';
    const sidebarLinks = document.querySelectorAll('.sidebar-link[href]');

    sidebarLinks.forEach(function (link) {
      const linkPath = link.getAttribute('href');

      if (!linkPath || linkPath === '#') return;

      if (linkPath === currentPath) {
        link.classList.add('active');
      }
    });
  }

  function initConfirmAction() {
    const confirmButtons = document.querySelectorAll('[data-confirm]');

    confirmButtons.forEach(function (button) {
      button.addEventListener('click', function (event) {
        const message = button.getAttribute('data-confirm') || 'Apakah Anda yakin?';

        if (!window.confirm(message)) {
          event.preventDefault();
        }
      });
    });
  }

  function initAutoDismissAlert() {
    const alerts = document.querySelectorAll('[data-auto-dismiss]');

    alerts.forEach(function (alert) {
      const delay = Number(alert.getAttribute('data-auto-dismiss')) || 3000;

      window.setTimeout(function () {
        if (typeof bootstrap !== 'undefined') {
          const alertInstance = bootstrap.Alert.getOrCreateInstance(alert);
          alertInstance.close();
        } else {
          alert.remove();
        }
      }, delay);
    });
  }

  function initDropdownInsideTableResponsive() {
    const dropdowns = document.querySelectorAll('.table-responsive .dropdown-toggle');

    dropdowns.forEach(function (dropdown) {
      dropdown.addEventListener('shown.bs.dropdown', function () {
        const tableResponsive = dropdown.closest('.table-responsive');

        if (tableResponsive) {
          tableResponsive.classList.add('dropdown-visible');
        }
      });

      dropdown.addEventListener('hidden.bs.dropdown', function () {
        const tableResponsive = dropdown.closest('.table-responsive');

        if (tableResponsive) {
          tableResponsive.classList.remove('dropdown-visible');
        }
      });
    });
  }

  function dispatchReadyEvent() {
    document.dispatchEvent(new CustomEvent('app:ready'));
  }

  initTooltips();
  initPopovers();
  initMobileSearchFocus();
  initActiveMenuByUrl();
  initConfirmAction();
  initAutoDismissAlert();
  initDropdownInsideTableResponsive();
  dispatchReadyEvent();
})();

