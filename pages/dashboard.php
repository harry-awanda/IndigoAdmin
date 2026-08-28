<section class="dashboard-section">

  <div class="row g-3">
    <div class="col-12 col-md-6 col-xl-3">
      <div class="card app-card stat-card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between gap-3">
            <div>
              <p class="stat-label">Total Siswa</p>
              <h3 class="stat-value">1.248</h3>
              <p class="stat-description">Siswa aktif tahun ini</p>
              <div class="stat-trend stat-trend-up">
                <i class="bi bi-arrow-up-short"></i>
                <span>Naik 12 siswa</span>
              </div>
            </div>
            <div class="stat-icon stat-icon-primary">
              <i class="bi bi-people"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
      <div class="card app-card stat-card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between gap-3">
            <div>
              <p class="stat-label">Total Guru</p>
              <h3 class="stat-value">86</h3>
              <p class="stat-description">Guru dan tenaga pendidik</p>
              <div class="stat-trend stat-trend-up">
                <i class="bi bi-arrow-up-short"></i>
                <span>Data stabil</span>
              </div>
            </div>
            <div class="stat-icon stat-icon-success">
              <i class="bi bi-person-badge"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
      <div class="card app-card stat-card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between gap-3">
            <div>
              <p class="stat-label">Kelas Aktif</p>
              <h3 class="stat-value">36</h3>
              <p class="stat-description">Rombongan belajar aktif</p>
              <div class="stat-trend stat-trend-up">
                <i class="bi bi-arrow-up-short"></i>
                <span>3 tingkat kelas</span>
              </div>
            </div>
            <div class="stat-icon stat-icon-info">
              <i class="bi bi-building"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
      <div class="card app-card stat-card h-100">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between gap-3">
            <div>
              <p class="stat-label">Presensi Hari Ini</p>
              <h3 class="stat-value">94%</h3>
              <p class="stat-description">Persentase kehadiran</p>
              <div class="stat-trend stat-trend-down">
                <i class="bi bi-arrow-down-short"></i>
                <span>6% belum hadir</span>
              </div>
            </div>
            <div class="stat-icon stat-icon-warning">
              <i class="bi bi-calendar-check"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-3 mt-1">
    <div class="col-12 col-xl-8">
      <div class="card app-card h-100">
        <div class="card-header app-card-header">
          <div>
            <h5 class="card-title mb-1">Ringkasan Presensi</h5>
            <p class="card-subtitle">Rekapitulasi status presensi hari ini.</p>
          </div>
          <a href="coming-soon.php" class="btn btn-sm btn-light">Lihat Detail</a>
        </div>

        <div class="card-body">
          <div class="attendance-summary-list">
            <div class="attendance-summary-item">
              <div class="attendance-summary-info">
                <div>
                  <div class="attendance-summary-label">Hadir</div>
                  <div class="attendance-summary-value">1046 siswa</div>
                </div>
                <div class="attendance-summary-percent">84%</div>
              </div>
              <div class="progress app-progress" role="progressbar" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-success" style="width: 84%"></div>
              </div>
            </div>

            <div class="attendance-summary-item">
              <div class="attendance-summary-info">
                <div>
                  <div class="attendance-summary-label">Terlambat</div>
                  <div class="attendance-summary-value">72 siswa</div>
                </div>
                <div class="attendance-summary-percent">6%</div>
              </div>
              <div class="progress app-progress" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-warning" style="width: 6%"></div>
              </div>
            </div>

            <div class="attendance-summary-item">
              <div class="attendance-summary-info">
                <div>
                  <div class="attendance-summary-label">Izin/Sakit</div>
                  <div class="attendance-summary-value">48 siswa</div>
                </div>
                <div class="attendance-summary-percent">4%</div>
              </div>
              <div class="progress app-progress" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-info" style="width: 4%"></div>
              </div>
            </div>

            <div class="attendance-summary-item">
              <div class="attendance-summary-info">
                <div>
                  <div class="attendance-summary-label">Alpa</div>
                  <div class="attendance-summary-value">82 siswa</div>
                </div>
                <div class="attendance-summary-percent">6%</div>
              </div>
              <div class="progress app-progress" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar bg-danger" style="width: 6%"></div>
              </div>
            </div>
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
            <a href="coming-soon.php" class="quick-action-item">
              <div class="quick-action-icon"><i class="bi bi-person-plus"></i></div>
              <div class="quick-action-content">
                <div class="quick-action-title">Tambah Siswa</div>
                <div class="quick-action-description">Input data siswa baru.</div>
              </div>
              <i class="bi bi-chevron-right quick-action-arrow"></i>
            </a>

            <a href="coming-soon.php" class="quick-action-item">
              <div class="quick-action-icon"><i class="bi bi-calendar-plus"></i></div>
              <div class="quick-action-content">
                <div class="quick-action-title">Input Presensi</div>
                <div class="quick-action-description">Kelola presensi harian.</div>
              </div>
              <i class="bi bi-chevron-right quick-action-arrow"></i>
            </a>

            <a href="coming-soon.php" class="quick-action-item">
              <div class="quick-action-icon"><i class="bi bi-file-earmark-arrow-down"></i></div>
              <div class="quick-action-content">
                <div class="quick-action-title">Buat Laporan</div>
                <div class="quick-action-description">Export laporan administrasi.</div>
              </div>
              <i class="bi bi-chevron-right quick-action-arrow"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-3 mt-1">
    <div class="col-12 col-xl-8">
      <div class="card app-card">
        <div class="card-header app-card-header">
          <div>
            <h5 class="card-title mb-1">Presensi Terbaru</h5>
            <p class="card-subtitle">Data presensi siswa yang baru tercatat.</p>
          </div>
          <div class="d-flex gap-2">
            <button class="btn btn-sm btn-light" type="button"><i class="bi bi-funnel me-1"></i>Filter</button>
            <button class="btn btn-sm btn-primary" type="button"><i class="bi bi-plus-lg me-1"></i>Tambah</button>
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
                <tr>
                  <td><div class="table-user"><div class="table-user-avatar">A</div><div><div class="table-user-name">Andi Pratama</div><div class="table-user-meta">Siswa aktif</div></div></div></td>
                  <td>XI RPL 1</td>
                  <td><span class="badge badge-soft-success">Hadir</span></td>
                  <td>07:12</td>
                  <td class="text-end"><a class="btn btn-sm btn-light" href="coming-soon.php">Detail</a></td>
                </tr>
                <tr>
                  <td><div class="table-user"><div class="table-user-avatar">S</div><div><div class="table-user-name">Siti Aulia</div><div class="table-user-meta">Siswa aktif</div></div></div></td>
                  <td>X DKV 2</td>
                  <td><span class="badge badge-soft-warning">Terlambat</span></td>
                  <td>07:42</td>
                  <td class="text-end"><a class="btn btn-sm btn-light" href="coming-soon.php">Detail</a></td>
                </tr>
                <tr>
                  <td><div class="table-user"><div class="table-user-avatar">B</div><div><div class="table-user-name">Bima Saputra</div><div class="table-user-meta">Siswa aktif</div></div></div></td>
                  <td>XII TKJ 1</td>
                  <td><span class="badge badge-soft-danger">Alpa</span></td>
                  <td>-</td>
                  <td class="text-end"><a class="btn btn-sm btn-light" href="coming-soon.php">Detail</a></td>
                </tr>
                <tr>
                  <td><div class="table-user"><div class="table-user-avatar">N</div><div><div class="table-user-name">Nadia Putri</div><div class="table-user-meta">Siswa aktif</div></div></div></td>
                  <td>XI TKJ 2</td>
                  <td><span class="badge badge-soft-info">Izin</span></td>
                  <td>-</td>
                  <td class="text-end"><a class="btn btn-sm btn-light" href="coming-soon.php">Detail</a></td>
                </tr>
                <tr>
                  <td><div class="table-user"><div class="table-user-avatar">R</div><div><div class="table-user-name">Raka Maulana</div><div class="table-user-meta">Siswa aktif</div></div></div></td>
                  <td>X RPL 3</td>
                  <td><span class="badge badge-soft-success">Hadir</span></td>
                  <td>07:18</td>
                  <td class="text-end"><a class="btn btn-sm btn-light" href="coming-soon.php">Detail</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="card-footer app-card-footer">
          <span>Menampilkan 5 data terbaru</span>
          <a href="coming-soon.php" class="card-footer-link">Lihat Semua <i class="bi bi-arrow-right ms-1"></i></a>
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
            <div class="activity-item"><div class="activity-icon"><i class="bi bi-pencil-square"></i></div><div class="activity-content"><div class="activity-title">Data siswa diperbarui</div><div class="activity-description">Admin memperbarui data kelas XI RPL 1.</div><div class="activity-time">5 menit lalu</div></div></div>
            <div class="activity-item"><div class="activity-icon"><i class="bi bi-calendar-check"></i></div><div class="activity-content"><div class="activity-title">Presensi hari ini diproses</div><div class="activity-description">Sistem mencatat presensi masuk siswa.</div><div class="activity-time">20 menit lalu</div></div></div>
            <div class="activity-item"><div class="activity-icon"><i class="bi bi-file-earmark-text"></i></div><div class="activity-content"><div class="activity-title">Laporan bulanan dibuat</div><div class="activity-description">Laporan presensi bulan ini berhasil dibuat.</div><div class="activity-time">1 jam lalu</div></div></div>
            <div class="activity-item"><div class="activity-icon"><i class="bi bi-box-arrow-in-right"></i></div><div class="activity-content"><div class="activity-title">Admin login ke sistem</div><div class="activity-description">Login berhasil dari perangkat desktop.</div><div class="activity-time">2 jam lalu</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

