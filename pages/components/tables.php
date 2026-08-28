<section class="components-page">
  <div class="card app-card component-section">
    <div class="card-header app-card-header">
      <div>
        <h5 class="card-title mb-1">Search & Filter Area</h5>
        <p class="card-subtitle">Area filter untuk tabel data admin.</p>
      </div>
    </div>

    <div class="card-body">
      <div class="filter-area">
        <div class="row g-3 align-items-end">
          <div class="col-12 col-md-4">
            <label class="form-label">Pencarian</label>
            <div class="input-group">
              <span class="input-group-text">
                <i class="bi bi-search"></i>
              </span>
              <input type="text" class="form-control" placeholder="Cari nama siswa...">
            </div>
          </div>

          <div class="col-12 col-md-3">
            <label class="form-label">Kelas</label>
            <select class="form-select">
              <option>Semua Kelas</option>
              <option>X RPL 1</option>
              <option>XI RPL 1</option>
            </select>
          </div>

          <div class="col-12 col-md-3">
            <label class="form-label">Status</label>
            <select class="form-select">
              <option>Semua Status</option>
              <option>Hadir</option>
              <option>Terlambat</option>
              <option>Alpa</option>
            </select>
          </div>

          <div class="col-12 col-md-2">
            <div class="d-grid">
              <button class="btn btn-primary">
                Terapkan
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tables -->
  <div class="card app-card component-section">
    <div class="card-header app-card-header">
      <div>
        <h5 class="card-title mb-1">Tables</h5>
        <p class="card-subtitle">Tabel responsif dengan badge dan action dropdown.</p>
      </div>
    </div>

    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-hover app-table mb-0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Status</th>
              <th>Tanggal</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>1</td>
              <td>
                <div class="table-user">
                  <div class="table-user-avatar">A</div>
                  <div>
                    <div class="table-user-name">Andi Pratama</div>
                    <div class="table-user-meta">NIS: 10231</div>
                  </div>
                </div>
              </td>
              <td>XI RPL 1</td>
              <td><span class="badge badge-soft-success">Aktif</span></td>
              <td>22 Juni 2026</td>
              <td class="text-end">
                <div class="dropdown">
                  <button class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown">
                    Aksi
                  </button>

                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="coming-soon.php"><i class="bi bi-eye me-2"></i>Detail</a></li>
                    <li><a class="dropdown-item" href="coming-soon.php"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                    <li><a class="dropdown-item text-danger" href="coming-soon.php" data-confirm="Yakin ingin menghapus data ini?"><i class="bi bi-trash me-2"></i>Hapus</a></li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>
                <div class="table-user">
                  <div class="table-user-avatar">S</div>
                  <div>
                    <div class="table-user-name">Siti Aulia</div>
                    <div class="table-user-meta">NIS: 10232</div>
                  </div>
                </div>
              </td>
              <td>X DKV 2</td>
              <td><span class="badge badge-soft-warning">Terlambat</span></td>
              <td>22 Juni 2026</td>
              <td class="text-end">
                <button class="btn btn-sm btn-light">
                  Detail
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="card-footer app-card-footer">
      <span>Menampilkan 1-2 dari 20 data</span>

      <nav>
        <ul class="pagination pagination-sm mb-0">
          <li class="page-item disabled">
            <a class="page-link">Prev</a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="coming-soon.php">1</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="coming-soon.php">2</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="coming-soon.php">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Empty State -->
  <div class="card app-card component-section">
    <div class="card-header app-card-header">
      <div>
        <h5 class="card-title mb-1">Empty State</h5>
        <p class="card-subtitle">Tampilan saat data kosong atau pencarian tidak ditemukan.</p>
      </div>
    </div>

    <div class="card-body">
      <div class="empty-state">
        <div class="empty-state-icon">
          <i class="bi bi-inbox"></i>
        </div>

        <h5 class="empty-state-title">Belum ada data</h5>

        <p class="empty-state-description">
          Data yang Anda cari belum tersedia. Tambahkan data baru untuk mulai menggunakan fitur ini.
        </p>

        <button class="btn btn-primary">
          <i class="bi bi-plus-lg me-1"></i>
          Tambah Data
        </button>
      </div>
    </div>
  </div>
</section>
