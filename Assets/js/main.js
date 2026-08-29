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

  function initFormEditors() {
    document.querySelectorAll('[data-editor-toolbar]').forEach(function (toolbar) {
      const editor = document.getElementById(toolbar.getAttribute('data-editor-toolbar'));
      if (!editor) return;

      toolbar.querySelectorAll('[data-editor-command]').forEach(function (button) {
        button.addEventListener('click', function () {
          editor.focus();
          document.execCommand(button.getAttribute('data-editor-command'), false, button.getAttribute('data-editor-value') || null);
          button.classList.toggle('is-active');
        });
      });
    });
  }

  function initFileUploadDemo() {
    document.querySelectorAll('[data-upload-zone]').forEach(function (zone) {
      const input = zone.querySelector('input[type="file"]');
      const list = zone.parentElement ? zone.parentElement.querySelector('[data-upload-list]') : null;

      if (!input || !list) return;

      function renderFiles(files) {
        list.innerHTML = '';
        Array.from(files).forEach(function (file) {
          const item = document.createElement('div');
          const icon = document.createElement('i');
          const content = document.createElement('div');
          const name = document.createElement('strong');
          const size = document.createElement('small');

          item.className = 'upload-item';
          icon.className = 'bi bi-file-earmark';
          name.textContent = file.name;
          size.className = 'd-block text-app-secondary';
          size.textContent = `${Math.max(1, Math.round(file.size / 1024))} KB`;

          content.appendChild(name);
          content.appendChild(size);
          item.appendChild(icon);
          item.appendChild(content);
          list.appendChild(item);
        });
      }

      input.addEventListener('change', function () {
        renderFiles(input.files);
      });

      zone.addEventListener('dragover', function (event) {
        event.preventDefault();
        zone.classList.add('is-dragover');
      });

      zone.addEventListener('dragleave', function () {
        zone.classList.remove('is-dragover');
      });

      zone.addEventListener('drop', function (event) {
        event.preventDefault();
        zone.classList.remove('is-dragover');
        renderFiles(event.dataTransfer.files);
      });
    });
  }

  function initTagInputs() {
    document.querySelectorAll('[data-tag-input]').forEach(function (tagInput) {
      const input = tagInput.querySelector('input');
      const list = tagInput.querySelector('.tag-list');

      if (!input || !list) return;

      function addTag(value) {
        const label = value.trim();
        if (!label) return;

        const tag = document.createElement('span');
        const remove = document.createElement('button');

        tag.className = 'tag-pill';
        tag.appendChild(document.createTextNode(label));
        remove.type = 'button';
        remove.setAttribute('aria-label', `Remove ${label}`);
        remove.textContent = 'x';
        tag.appendChild(remove);
        list.appendChild(tag);
        input.value = '';
      }

      tagInput.addEventListener('click', function (event) {
        if (event.target.tagName === 'BUTTON') {
          event.target.closest('.tag-pill').remove();
          return;
        }
        input.focus();
      });

      input.addEventListener('keydown', function (event) {
        if (event.key === 'Enter' || event.key === ',') {
          event.preventDefault();
          addTag(input.value.replace(',', ''));
        }

        if (event.key === 'Backspace' && !input.value && list.lastElementChild) {
          list.lastElementChild.remove();
        }
      });
    });
  }

  function initRangeValues() {
    document.querySelectorAll('[data-range-value]').forEach(function (range) {
      const value = range.parentElement ? range.parentElement.querySelector('.range-value') : null;
      if (!value) return;

      function updateValue() {
        value.textContent = range.value;
      }

      range.addEventListener('input', updateValue);
      updateValue();
    });
  }

  function initPickerPreviews() {
    document.querySelectorAll('[data-date-range-summary]').forEach(function (summary) {
      const start = document.getElementById(summary.getAttribute('data-start'));
      const end = document.getElementById(summary.getAttribute('data-end'));
      if (!start || !end) return;

      function updateSummary() {
        summary.textContent = `Selected range: ${start.value || '-'} to ${end.value || '-'}`;
      }

      start.addEventListener('change', updateSummary);
      end.addEventListener('change', updateSummary);
      updateSummary();
    });

    document.querySelectorAll('[data-color-preview]').forEach(function (input) {
      const box = document.querySelector('[data-color-preview-box]');
      const value = document.querySelector('[data-color-preview-value]');
      if (!box || !value) return;

      function updateColor() {
        box.style.backgroundColor = input.value;
        value.textContent = input.value;
      }

      input.addEventListener('input', updateColor);
      updateColor();
    });
  }

  function initFormExtras() {
    document.querySelectorAll('[data-maxlength-counter]').forEach(function (field) {
      const current = field.parentElement ? field.parentElement.querySelector('[data-maxlength-current]') : null;
      if (!current) return;

      function updateCount() {
        current.textContent = field.value.length;
      }

      field.addEventListener('input', updateCount);
      updateCount();
    });

    document.querySelectorAll('[data-password-toggle]').forEach(function (button) {
      const input = document.getElementById(button.getAttribute('data-password-toggle'));
      if (!input) return;

      button.addEventListener('click', function () {
        input.type = input.type === 'password' ? 'text' : 'password';
        button.innerHTML = input.type === 'password' ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
      });
    });

    document.querySelectorAll('[data-copy-target]').forEach(function (button) {
      const target = document.getElementById(button.getAttribute('data-copy-target'));
      const feedback = button.closest('.card-body') ? button.closest('.card-body').querySelector('[data-copy-feedback]') : null;
      if (!target) return;

      button.addEventListener('click', function () {
        target.select();
        document.execCommand('copy');
        if (feedback) feedback.textContent = 'Copied to clipboard.';
      });
    });

    document.querySelectorAll('[data-autosize-textarea]').forEach(function (textarea) {
      function resizeTextarea() {
        textarea.style.height = 'auto';
        textarea.style.height = `${textarea.scrollHeight}px`;
      }

      textarea.addEventListener('input', resizeTextarea);
      resizeTextarea();
    });

    document.querySelectorAll('[data-phone-mask]').forEach(function (input) {
      input.addEventListener('input', function () {
        const digits = input.value.replace(/\D/g, '').slice(0, 10);
        const area = digits.slice(0, 3);
        const prefix = digits.slice(3, 6);
        const line = digits.slice(6, 10);
        input.value = digits.length > 6 ? `(${area}) ${prefix}-${line}` : digits.length > 3 ? `(${area}) ${prefix}` : area;
      });
    });

    document.querySelectorAll('[data-card-mask]').forEach(function (input) {
      input.addEventListener('input', function () {
        input.value = input.value.replace(/\D/g, '').slice(0, 16).replace(/(.{4})/g, '$1 ').trim();
      });
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
  initFormEditors();
  initFileUploadDemo();
  initTagInputs();
  initRangeValues();
  initPickerPreviews();
  initFormExtras();
  dispatchReadyEvent();

  window.AppToast = {
    show: showToast
  };
})();

