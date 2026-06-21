/*
  Theme Manager
  Mengatur light mode, dark mode, dan system mode.
*/

(function () {
  const STORAGE_KEY = 'app-theme';

  const themeIcon = document.getElementById('themeIcon');
  const themeButtons = document.querySelectorAll('.theme-option');
  const systemThemeQuery = window.matchMedia('(prefers-color-scheme: dark)');

  function getSavedTheme() {
    return localStorage.getItem(STORAGE_KEY) || 'light';
  }

  function getSystemTheme() {
    return systemThemeQuery.matches ? 'dark' : 'light';
  }

  function getActiveTheme(themeChoice) {
    if (themeChoice === 'system') {
      return getSystemTheme();
    }

    return themeChoice;
  }

  function setThemeIcon(activeTheme, themeChoice) {
    if (!themeIcon) return;

    if (themeChoice === 'system') {
      themeIcon.className = 'bi bi-laptop';
      return;
    }

    if (activeTheme === 'dark') {
      themeIcon.className = 'bi bi-moon';
      return;
    }

    themeIcon.className = 'bi bi-sun';
  }

  function updateActiveButton(themeChoice) {
    themeButtons.forEach(function (button) {
      const buttonTheme = button.getAttribute('data-theme-value');

      if (buttonTheme === themeChoice) {
        button.classList.add('active');
      } else {
        button.classList.remove('active');
      }
    });
  }

  function applyTheme(themeChoice) {
    const activeTheme = getActiveTheme(themeChoice);

    document.documentElement.setAttribute('data-bs-theme', activeTheme);
    document.documentElement.setAttribute('data-theme-choice', themeChoice);

    setThemeIcon(activeTheme, themeChoice);
    updateActiveButton(themeChoice);
  }

  function saveTheme(themeChoice) {
    localStorage.setItem(STORAGE_KEY, themeChoice);
    applyTheme(themeChoice);
  }

  themeButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      const selectedTheme = button.getAttribute('data-theme-value');

      if (!selectedTheme) return;

      saveTheme(selectedTheme);
    });
  });

  systemThemeQuery.addEventListener('change', function () {
    const savedTheme = getSavedTheme();

    if (savedTheme === 'system') {
      applyTheme('system');
    }
  });

  applyTheme(getSavedTheme());
})();