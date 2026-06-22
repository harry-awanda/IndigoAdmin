<?php
$stats = [
  [
    'title' => 'Total Siswa',
    'value' => '1.248',
    'icon' => 'bi bi-people',
    'color' => 'primary',
    'description' => 'Siswa aktif tahun ini',
    'trend' => 'Naik 12 siswa',
    'trend_type' => 'up',
  ],
  [
    'title' => 'Total Guru',
    'value' => '86',
    'icon' => 'bi bi-person-badge',
    'color' => 'success',
    'description' => 'Guru dan tenaga pendidik',
    'trend' => 'Data stabil',
    'trend_type' => 'up',
  ],
  [
    'title' => 'Kelas Aktif',
    'value' => '36',
    'icon' => 'bi bi-building',
    'color' => 'info',
    'description' => 'Rombongan belajar aktif',
    'trend' => '3 tingkat kelas',
    'trend_type' => 'up',
  ],
  [
    'title' => 'Presensi Hari Ini',
    'value' => '94%',
    'icon' => 'bi bi-calendar-check',
    'color' => 'warning',
    'description' => 'Persentase kehadiran',
    'trend' => '6% belum hadir',
    'trend_type' => 'down',
  ],
];

$attendanceSummary = [
  ['label' => 'Hadir', 'value' => 1046, 'percent' => 84, 'color' => 'success'],
  ['label' => 'Terlambat', 'value' => 72, 'percent' => 6, 'color' => 'warning'],
  ['label' => 'Izin/Sakit', 'value' => 48, 'percent' => 4, 'color' => 'info'],
  ['label' => 'Alpa', 'value' => 82, 'percent' => 6, 'color' => 'danger'],
];

$recentAttendances = [
  [
    'name' => 'Andi Pratama',
    'class' => 'XI RPL 1',
    'status' => 'Hadir',
    'status_color' => 'success',
    'time' => '07:12',
  ],
  [
    'name' => 'Siti Aulia',
    'class' => 'X DKV 2',
    'status' => 'Terlambat',
    'status_color' => 'warning',
    'time' => '07:42',
  ],
  [
    'name' => 'Bima Saputra',
    'class' => 'XII TKJ 1',
    'status' => 'Alpa',
    'status_color' => 'danger',
    'time' => '-',
  ],
  [
    'name' => 'Nadia Putri',
    'class' => 'XI TKJ 2',
    'status' => 'Izin',
    'status_color' => 'info',
    'time' => '-',
  ],
  [
    'name' => 'Raka Maulana',
    'class' => 'X RPL 3',
    'status' => 'Hadir',
    'status_color' => 'success',
    'time' => '07:18',
  ],
];

$activities = [
  [
    'title' => 'Data siswa diperbarui',
    'description' => 'Admin memperbarui data kelas XI RPL 1.',
    'time' => '5 menit lalu',
    'icon' => 'bi bi-pencil-square',
  ],
  [
    'title' => 'Presensi hari ini diproses',
    'description' => 'Sistem mencatat presensi masuk siswa.',
    'time' => '20 menit lalu',
    'icon' => 'bi bi-calendar-check',
  ],
  [
    'title' => 'Laporan bulanan dibuat',
    'description' => 'Laporan presensi bulan ini berhasil dibuat.',
    'time' => '1 jam lalu',
    'icon' => 'bi bi-file-earmark-text',
  ],
  [
    'title' => 'Admin login ke sistem',
    'description' => 'Login berhasil dari perangkat desktop.',
    'time' => '2 jam lalu',
    'icon' => 'bi bi-box-arrow-in-right',
  ],
];

$quickActions = [
  [
    'title' => 'Tambah Siswa',
    'description' => 'Input data siswa baru.',
    'icon' => 'bi bi-person-plus',
    'url' => '#',
  ],
  [
    'title' => 'Input Presensi',
    'description' => 'Kelola presensi harian.',
    'icon' => 'bi bi-calendar-plus',
    'url' => '#',
  ],
  [
    'title' => 'Buat Laporan',
    'description' => 'Export laporan administrasi.',
    'icon' => 'bi bi-file-earmark-arrow-down',
    'url' => '#',
  ],
];
?>

<section class="dashboard-section">

  <!-- Statistic Cards -->
  <div class="row g-3">
    <?php foreach ($stats as $stat) : ?>
      <div class="col-12 col-md-6 col-xl-3">
        <?php include __DIR__ . '/../pages/components/stat-card.php'; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Summary & Quick Actions -->
  <div class="row g-3 mt-1">
    <div class="col-12 col-xl-8">
      <div class="card app-card h-100">
        <div class="card-header app-card-header">
          <div>
            <h5 class="card-title mb-1">Ringkasan Presensi</h5>
            <p class="card-subtitle">Rekapitulasi status presensi hari ini.</p>
          </div>

          <a href="#" class="btn btn-sm btn-light">
            Lihat Detail
          </a>
        </div>

        <div class="card-body">
          <div class="attendance-summary-list">
            <?php foreach ($attendanceSummary as $item) : ?>
              <div class="attendance-summary-item">
                <div class="attendance-summary-info">
                  <div>
                    <div class="attendance-summary-label"><?= $item['label']; ?></div>
                    <div class="attendance-summary-value"><?= $item['value']; ?> siswa</div>
                  </div>

                  <div class="attendance-summary-percent">
                    <?= $item['percent']; ?>%
                  </div>
                </div>

                <div class="progress app-progress" role="progressbar" aria-valuenow="<?= $item['percent']; ?>" aria-valuemin="0" aria-valuemax="100">
                  <div
                    class="progress-bar bg-<?= $item['color']; ?>"
                    style="width: <?= $item['percent']; ?>%"
                  ></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-4">
      <div class="card app-card h-100">
        <div class="card-header">
          <h5 class="card-title mb-0">Aksi Cepat</h5>
        </div>

        <div class="card-body">
          <div class="quick-action-list">
            <?php foreach ($quickActions as $action) : ?>
              <a href="<?= $action['url']; ?>" class="quick-action-item">
                <div class="quick-action-icon">
                  <i class="<?= $action['icon']; ?>"></i>
                </div>

                <div class="quick-action-content">
                  <div class="quick-action-title"><?= $action['title']; ?></div>
                  <div class="quick-action-description"><?= $action['description']; ?></div>
                </div>

                <i class="bi bi-chevron-right quick-action-arrow"></i>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Table & Activity -->
  <div class="row g-3 mt-1">
    <div class="col-12 col-xl-8">
      <div class="card app-card">
        <div class="card-header app-card-header">
          <div>
            <h5 class="card-title mb-1">Presensi Terbaru</h5>
            <p class="card-subtitle">Data presensi siswa yang baru tercatat.</p>
          </div>

          <div class="d-flex gap-2">
            <button class="btn btn-sm btn-light" type="button">
              <i class="bi bi-funnel me-1"></i>
              Filter
            </button>

            <button class="btn btn-sm btn-primary" type="button">
              <i class="bi bi-plus-lg me-1"></i>
              Tambah
            </button>
          </div>
        </div>

        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover app-table mb-0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Status</th>
                  <th>Waktu</th>
                  <th class="text-end">Aksi</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($recentAttendances as $attendance) : ?>
                  <tr>
                    <td>
                      <div class="table-user">
                        <div class="table-user-avatar">
                          <?= strtoupper(substr($attendance['name'], 0, 1)); ?>
                        </div>

                        <div>
                          <div class="table-user-name"><?= $attendance['name']; ?></div>
                          <div class="table-user-meta">Siswa aktif</div>
                        </div>
                      </div>
                    </td>

                    <td><?= $attendance['class']; ?></td>

                    <td>
                      <span class="badge badge-soft-<?= $attendance['status_color']; ?>">
                        <?= $attendance['status']; ?>
                      </span>
                    </td>

                    <td><?= $attendance['time']; ?></td>

                    <td class="text-end">
                      <div class="dropdown">
                        <button class="btn btn-sm btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                          Aksi
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="bi bi-eye me-2"></i>
                              Detail
                            </a>
                          </li>

                          <li>
                            <a class="dropdown-item" href="#">
                              <i class="bi bi-pencil me-2"></i>
                              Edit
                            </a>
                          </li>

                          <li>
                            <a class="dropdown-item text-danger" href="#" data-confirm="Yakin ingin menghapus data ini?">
                              <i class="bi bi-trash me-2"></i>
                              Hapus
                            </a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card-footer app-card-footer">
          <span>Menampilkan 5 data terbaru</span>

          <a href="#" class="card-footer-link">
            Lihat Semua
            <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="col-12 col-xl-4">
      <div class="card app-card h-100">
        <div class="card-header app-card-header">
          <div>
            <h5 class="card-title mb-1">Aktivitas Sistem</h5>
            <p class="card-subtitle">Riwayat aktivitas terbaru.</p>
          </div>
        </div>

        <div class="card-body">
          <div class="activity-list">
            <?php foreach ($activities as $activity) : ?>
              <div class="activity-item">
                <div class="activity-icon">
                  <i class="<?= $activity['icon']; ?>"></i>
                </div>

                <div class="activity-content">
                  <div class="activity-title"><?= $activity['title']; ?></div>
                  <div class="activity-description"><?= $activity['description']; ?></div>
                  <div class="activity-time"><?= $activity['time']; ?></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>