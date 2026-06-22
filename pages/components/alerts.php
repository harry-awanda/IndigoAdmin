<section class="components-page">
  <div class="card app-card component-section">
    <div class="card-header app-card-header">
      <div>
        <h5 class="card-title mb-1">Alerts</h5>
        <p class="card-subtitle">Pesan informasi yang tampil langsung di halaman.</p>
      </div>
    </div>

    <div class="card-body">
      <div class="alert alert-primary app-alert">
        <i class="bi bi-info-circle alert-icon"></i>
        <div><strong>Informasi.</strong> Ini adalah alert primary.</div>
      </div>

      <div class="alert alert-success app-alert">
        <i class="bi bi-check-circle alert-icon"></i>
        <div><strong>Berhasil.</strong> Data berhasil disimpan.</div>
      </div>

      <div class="alert alert-warning app-alert">
        <i class="bi bi-exclamation-triangle alert-icon"></i>
        <div><strong>Perhatian.</strong> Silakan periksa kembali data.</div>
      </div>

      <div class="alert alert-danger app-alert mb-0">
        <i class="bi bi-x-circle alert-icon"></i>
        <div><strong>Gagal.</strong> Data gagal diproses.</div>
      </div>
    </div>
  </div>

  <div class="card app-card component-section">
    <div class="card-header app-card-header">
      <div>
        <h5 class="card-title mb-1">Dismissible Alert</h5>
        <p class="card-subtitle">Alert yang dapat ditutup oleh pengguna.</p>
      </div>
    </div>

    <div class="card-body">
      <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        Data berhasil disimpan.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
    </div>
  </div>
</section>