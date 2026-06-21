/*
  Theme script sementara.
  Logic lengkap light, dark, dan system mode akan dirapikan pada tahap berikutnya.
*/

(function () {
  const themeButtons = document.querySelectorAll('.theme-option');
  const themeIcon = document.getElementById('themeIcon');

  function applyTheme(theme) {
    document.documentElement.setAttribute('data-bs-theme', theme);

    if (themeIcon) {
      themeIcon.className = theme === 'dark' ? 'bi bi-moon' : 'bi bi-sun';
    }
  }

  themeButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      const selectedTheme = button.getAttribute('data-theme-value');

      if (selectedTheme === 'system') {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(prefersDark ? 'dark' : 'light');
        localStorage.setItem('theme', 'system');
        return;
      }

      applyTheme(selectedTheme);
      localStorage.setItem('theme', selectedTheme);
    });
  });

  const savedTheme = localStorage.getItem('theme') || 'light';

  if (savedTheme === 'system') {
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    applyTheme(prefersDark ? 'dark' : 'light');
  } else {
    applyTheme(savedTheme);
  }
})();