<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    <?= isset($pageTitle) ? $pageTitle . ' | Admin Template' : 'Admin Template'; ?>
  </title>

  <!-- Initial Theme Loader -->
  <script>
    (function () {
      const savedTheme = localStorage.getItem('app-theme') || 'light';
      const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

      const activeTheme = savedTheme === 'system'
        ? (prefersDark ? 'dark' : 'light')
        : savedTheme;

      document.documentElement.setAttribute('data-bs-theme', activeTheme);
      document.documentElement.setAttribute('data-theme-choice', savedTheme);
    })();
  </script>

  <!-- Bootstrap CSS -->
  <?php if (file_exists(__DIR__ . '/../Assets/vendor/bootstrap/css/bootstrap.min.css')) : ?>
    <link rel="stylesheet" href="Assets/vendor/bootstrap/css/bootstrap.min.css">
  <?php else : ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php endif; ?>

  <!-- Bootstrap Icons -->
  <?php if (file_exists(__DIR__ . '/../Assets/vendor/bootstrap-icons/bootstrap-icons.css')) : ?>
    <link rel="stylesheet" href="Assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <?php else : ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <?php endif; ?>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="Assets/css/themes.css">
  <link rel="stylesheet" href="Assets/css/config.css">
  <link rel="stylesheet" href="Assets/css/main.css">
</head>