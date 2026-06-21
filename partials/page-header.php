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

  <?php if (!empty($pageActionLabel)) : ?>
    <div class="page-header-action">
      <a href="<?= $pageActionUrl ?? '#'; ?>" class="btn btn-primary">
        <?php if (!empty($pageActionIcon)) : ?>
          <i class="<?= $pageActionIcon; ?> me-1"></i>
        <?php endif; ?>

        <?= $pageActionLabel; ?>
      </a>
    </div>
  <?php endif; ?>
</div>