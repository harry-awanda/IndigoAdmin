<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle; ?> | Admin Template</title>

  <script>
    (function () {
      const savedTheme = localStorage.getItem('app-theme') || 'light';
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      const activeTheme = savedTheme === 'system' ? (prefersDark ? 'dark' : 'light') : savedTheme;

      document.documentElement.setAttribute('data-bs-theme', activeTheme);
      document.documentElement.setAttribute('data-theme-choice', savedTheme);
    })();
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="Assets/css/themes.css">
  <link rel="stylesheet" href="Assets/css/config.css">
  <link rel="stylesheet" href="Assets/css/main.css">
</head>

