/*
  Main Script
  Mengatur inisialisasi Bootstrap, search mobile, toast, dan utility kecil.
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


  function initBlockUiDemo() {
    const buttons = document.querySelectorAll('[data-blockui]');

    buttons.forEach(function (button) {
      button.addEventListener('click', function () {
        const selector = button.getAttribute('data-blockui-target');
        const fallbackTarget = button.closest('.card') || document.body;
        const target = selector ? (selector === 'body' ? document.body : document.querySelector(selector)) : fallbackTarget;

        if (!target || target.querySelector(':scope > .app-block-overlay, :scope > .app-page-block-overlay')) return;

        const overlay = document.createElement('div');
        const isPage = target === document.body;
        const variant = button.getAttribute('data-blockui-variant');
        const isGrowSpinner = button.getAttribute('data-blockui-spinner') === 'grow';
        const spinner = isGrowSpinner ? 'spinner-grow spinner-grow-sm' : 'spinner-border spinner-border-sm';
        const messages = (button.getAttribute('data-blockui-message') || 'Loading...').split('|');

        overlay.className = isPage ? 'app-page-block-overlay' : 'app-block-overlay';
        if (variant === 'primary') overlay.classList.add('app-block-overlay-primary');
        overlay.innerHTML = `<div class="app-block-content"><span class="${spinner}" aria-hidden="true"></span><span>${messages[0]}</span></div>`;

        if (!isPage) target.classList.add('app-block-target');
        target.appendChild(overlay);

        messages.slice(1).forEach(function (message, index) {
          window.setTimeout(function () {
            const label = overlay.querySelector('.app-block-content span:last-child');
            if (label) label.textContent = message;
          }, (index + 1) * 650);
        });

        window.setTimeout(function () {
          overlay.remove();
          if (!isPage) target.classList.remove('app-block-target');
        }, Math.max(1600, messages.length * 700));
      });
    });
  }

  function initDragAndDropDemo() {
    let draggedItem = null;

    function getDragAfterElement(container, y) {
      const items = [...container.querySelectorAll('[draggable="true"]:not(.dragging)')];

      return items.reduce(function (closest, child) {
        const box = child.getBoundingClientRect();
        const offset = y - box.top - box.height / 2;

        if (offset < 0 && offset > closest.offset) {
          return { offset: offset, element: child };
        }

        return closest;
      }, { offset: Number.NEGATIVE_INFINITY }).element;
    }

    document.querySelectorAll('[data-sortable-list], .drag-dropzone').forEach(function (container) {
      container.addEventListener('dragstart', function (event) {
        draggedItem = event.target.closest('[draggable="true"]');
        if (!draggedItem) return;
        draggedItem.classList.add('dragging');
        event.dataTransfer.effectAllowed = 'move';
      });

      container.addEventListener('dragend', function () {
        if (draggedItem) draggedItem.classList.remove('dragging');
        document.querySelectorAll('.drag-over').forEach(function (zone) { zone.classList.remove('drag-over'); });
        draggedItem = null;
      });

      container.addEventListener('dragover', function (event) {
        if (!draggedItem) return;
        event.preventDefault();
        container.classList.add('drag-over');
        const afterElement = getDragAfterElement(container, event.clientY);

        if (afterElement == null) {
          container.appendChild(draggedItem);
        } else {
          container.insertBefore(draggedItem, afterElement);
        }
      });

      container.addEventListener('dragleave', function () {
        container.classList.remove('drag-over');
      });
    });
  }

  function initAppAlertDemo() {
    const backdrop = document.getElementById('appAlertBackdrop');
    const title = document.getElementById('appAlertTitle');
    const message = document.getElementById('appAlertMessage');
    const icon = document.getElementById('appAlertIcon');
    const actions = document.getElementById('appAlertActions');

    if (!backdrop || !title || !message || !icon || !actions) return;

    const alertMap = {
      basic: { title: 'Any fool can use a computer', message: 'A simple message alert.', icon: 'bi-info-circle', type: 'info' },
      info: { title: 'Info', message: 'This is an informational alert.', icon: 'bi-info-circle', type: 'info' },
      success: { title: 'Good job!', message: 'You clicked the button successfully.', icon: 'bi-check-circle', type: 'success' },
      warning: { title: 'Warning', message: 'Please review this action before continuing.', icon: 'bi-exclamation-triangle', type: 'warning' },
      error: { title: 'Error', message: 'Something went wrong while processing the request.', icon: 'bi-x-circle', type: 'error' },
      confirm: { title: 'Are you sure?', message: 'You will not be able to revert this action.', icon: 'bi-question-circle', type: 'warning', confirm: true },
      timer: { title: 'Auto close alert!', message: 'I will close in 2 seconds.', icon: 'bi-hourglass-split', type: 'info', timer: true }
    };

    function closeAlert() {
      backdrop.hidden = true;
    }

    function renderAlert(config) {
      title.textContent = config.title;
      message.textContent = config.message;
      icon.className = `app-alert-icon ${config.type}`;
      icon.innerHTML = `<i class="bi ${config.icon}"></i>`;

      if (config.confirm) {
        actions.innerHTML = '<button class="btn btn-primary" type="button" data-app-alert-close>Yes, confirm</button><button class="btn btn-light" type="button" data-app-alert-close>Cancel</button>';
      } else {
        actions.innerHTML = '<button class="btn btn-primary" type="button" data-app-alert-close>OK</button>';
      }

      backdrop.hidden = false;

      if (config.timer) {
        window.setTimeout(closeAlert, 2000);
      }
    }

    document.querySelectorAll('[data-app-alert]').forEach(function (button) {
      button.addEventListener('click', function () {
        renderAlert(alertMap[button.getAttribute('data-app-alert')] || alertMap.basic);
      });
    });

    backdrop.addEventListener('click', function (event) {
      if (event.target === backdrop || event.target.hasAttribute('data-app-alert-close')) closeAlert();
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && !backdrop.hidden) closeAlert();
    });
  }
  function dispatchReadyEvent() {
    document.dispatchEvent(new CustomEvent('app:ready'));
  }

  initTooltips();
  initPopovers();
  initMobileSearchFocus();
  initConfirmAction();
  initAutoDismissAlert();
  initDropdownInsideTableResponsive();
  initToastDemo();
  initBlockUiDemo();
  initDragAndDropDemo();
  initAppAlertDemo();
  dispatchReadyEvent();

  window.AppToast = {
    show: showToast
  };
})();

