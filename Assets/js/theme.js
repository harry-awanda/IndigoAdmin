/*
  Theme Manager
  Mengatur light mode, dark mode, dan system mode.
*/

(function () {
  const STORAGE_KEY = 'app-theme';
  const DEFAULT_THEME = 'light';

  const html = document.documentElement;
  const themeIcon = document.getElementById('themeIcon');
  const themeSwitcherButton = document.getElementById('themeSwitcherButton');
  const themeButtons = document.querySelectorAll('.theme-option');
  const systemThemeQuery = window.matchMedia('(prefers-color-scheme: dark)');

  const validThemes = ['light', 'dark', 'system'];

  function isValidTheme(theme) {
    return validThemes.includes(theme);
  }

  function getSavedTheme() {
    const savedTheme = localStorage.getItem(STORAGE_KEY);

    if (!isValidTheme(savedTheme)) {
      return DEFAULT_THEME;
    }

    return savedTheme;
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

  function getThemeLabel(themeChoice, activeTheme) {
    if (themeChoice === 'system') {
      return activeTheme === 'dark' ? 'System (Dark)' : 'System (Light)';
    }

    return themeChoice === 'dark' ? 'Dark' : 'Light';
  }

  function setThemeIcon(themeChoice, activeTheme) {
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

  function updateThemeButton(themeChoice, activeTheme) {
    const label = getThemeLabel(themeChoice, activeTheme);

    if (themeSwitcherButton) {
      themeSwitcherButton.setAttribute('title', `Theme: ${label}`);
      themeSwitcherButton.setAttribute('aria-label', `Theme aktif: ${label}`);
    }
  }

  function updateActiveThemeOption(themeChoice) {
    themeButtons.forEach(function (button) {
      const buttonTheme = button.getAttribute('data-theme-value');
      const isActive = buttonTheme === themeChoice;

      button.classList.toggle('active', isActive);
      button.setAttribute('aria-pressed', isActive ? 'true' : 'false');
    });
  }

  function applyTheme(themeChoice) {
    if (!isValidTheme(themeChoice)) {
      themeChoice = DEFAULT_THEME;
    }

    const activeTheme = getActiveTheme(themeChoice);

    html.setAttribute('data-bs-theme', activeTheme);
    html.setAttribute('data-theme-choice', themeChoice);

    setThemeIcon(themeChoice, activeTheme);
    updateThemeButton(themeChoice, activeTheme);
    updateActiveThemeOption(themeChoice);

    document.dispatchEvent(
      new CustomEvent('app:themechange', {
        detail: {
          themeChoice: themeChoice,
          activeTheme: activeTheme
        }
      })
    );
  }

  function saveTheme(themeChoice) {
    if (!isValidTheme(themeChoice)) return;

    localStorage.setItem(STORAGE_KEY, themeChoice);
    applyTheme(themeChoice);
  }

  function handleSystemThemeChange() {
    const savedTheme = getSavedTheme();

    if (savedTheme === 'system') {
      applyTheme('system');
    }
  }

  themeButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      const selectedTheme = button.getAttribute('data-theme-value');
      saveTheme(selectedTheme);
    });
  });

  if (systemThemeQuery.addEventListener) {
    systemThemeQuery.addEventListener('change', handleSystemThemeChange);
  } else if (systemThemeQuery.addListener) {
    systemThemeQuery.addListener(handleSystemThemeChange);
  }

  applyTheme(getSavedTheme());

  window.AppTheme = {
    get: getSavedTheme,
    set: saveTheme,
    apply: applyTheme
  };
})();