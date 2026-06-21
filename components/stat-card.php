<?php
$statTitle = $stat['title'] ?? 'Judul Statistik';
$statValue = $stat['value'] ?? '0';
$statIcon = $stat['icon'] ?? 'bi bi-bar-chart';
$statColor = $stat['color'] ?? 'primary';
$statDescription = $stat['description'] ?? '';
$statTrend = $stat['trend'] ?? null;
$statTrendType = $stat['trend_type'] ?? 'up';
?>

<div class="card app-card stat-overview-card h-100">
  <div class="card-body">
    <div class="stat-overview">
      <div class="stat-overview-content">
        <p class="stat-label"><?= $statTitle; ?></p>
        <h3 class="stat-value"><?= $statValue; ?></h3>

        <?php if (!empty($statDescription)) : ?>
          <p class="stat-description"><?= $statDescription; ?></p>
        <?php endif; ?>

        <?php if (!empty($statTrend)) : ?>
          <div class="stat-trend stat-trend-<?= $statTrendType; ?>">
            <i class="bi <?= $statTrendType === 'down' ? 'bi-arrow-down-short' : 'bi-arrow-up-short'; ?>"></i>
            <span><?= $statTrend; ?></span>
          </div>
        <?php endif; ?>
      </div>

      <div class="stat-icon stat-icon-<?= $statColor; ?>">
        <i class="<?= $statIcon; ?>"></i>
      </div>
    </div>
  </div>
</div>