/*
  Main Script
  Mengatur inisialisasi Bootstrap, active menu helper, search mobile, toast, dan utility kecil.
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
    const currentUrl = window.location.href;
    const sidebarLinks = document.querySelectorAll('.sidebar-link[href]');

    sidebarLinks.forEach(function (link) {
      const linkUrl = new URL(link.getAttribute('href'), window.location.origin);

      if (linkUrl.href === currentUrl) {
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

  function showToast(options) {
    if (typeof bootstrap === 'undefined') return;

    const toastElement = document.getElementById('appToast');
    const toastTitle = document.getElementById('appToastTitle');
    const toastMessage = document.getElementById('appToastMessage');
    const toastIcon = document.getElementById('appToastIcon');

    if (!toastElement || !toastTitle || !toastMessage || !toastIcon) return;

    const type = options.type || 'info';
    const title = options.title || 'Notifikasi';
    const message = options.message || 'Pesan notifikasi.';

    const iconMap = {
      success: 'bi bi-check-circle',
      warning: 'bi bi-exclamation-triangle',
      danger: 'bi bi-x-circle',
      info: 'bi bi-info-circle'
    };

    toastTitle.textContent = title;
    toastMessage.textContent = message;

    toastIcon.className = `toast-icon toast-icon-${type}`;
    toastIcon.innerHTML = `<i class="${iconMap[type] || iconMap.info}"></i>`;

    const toast = bootstrap.Toast.getOrCreateInstance(toastElement, {
      autohide: true,
      delay: 3000
    });

    toast.show();
  }

  function initToastDemo() {
    const toastButtons = document.querySelectorAll('[data-toast-demo]');

    toastButtons.forEach(function (button) {
      button.addEventListener('click', function () {
        showToast({
          type: button.getAttribute('data-toast-type') || 'info',
          title: button.getAttribute('data-toast-title') || 'Notifikasi',
          message: button.getAttribute('data-toast-message') || 'Pesan notifikasi.'
        });
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
  initToastDemo();
  dispatchReadyEvent();

  window.AppToast = {
    show: showToast
  };
})();