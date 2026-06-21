<div class="page-header">
  <div>
    <h1 class="page-title">
      <?= $pageTitle ?? 'Dashboard'; ?>
    </h1>

    <?php if (!empty($pageDescription)) : ?>
      <p class="page-description">
        <?= $pageDescription; ?>
      </p>
    <?php endif; ?>
  </div>

  <div class="page-header-action">
    <button type="button" class="btn btn-primary">
      <i class="bi bi-plus-lg me-1"></i>
      Tambah Data
    </button>
  </div>
</div>