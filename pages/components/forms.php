<section class="components-page">
  <div class="card app-card component-section">
    <div class="card-header app-card-header">
      <div>
        <h5 class="card-title mb-1">Forms</h5>
        <p class="card-subtitle">Komponen form untuk input data admin.</p>
      </div>
    </div>

    <div class="card-body">
      <form class="row g-3">
        <div class="col-12 col-md-6">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
        </div>

        <div class="col-12 col-md-6">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="nama@email.com">
        </div>

        <div class="col-12 col-md-6">
          <label class="form-label">Kelas</label>
          <select class="form-select">
            <option selected>Pilih kelas</option>
            <option>X RPL 1</option>
            <option>XI RPL 1</option>
            <option>XII RPL 1</option>
          </select>
        </div>

        <div class="col-12 col-md-6">
          <label class="form-label">Tanggal</label>
          <input type="date" class="form-control">
        </div>

        <div class="col-12">
          <label class="form-label">Alamat</label>
          <textarea class="form-control" rows="3" placeholder="Masukkan alamat"></textarea>
          <div class="form-text">Gunakan alamat sesuai data resmi.</div>
        </div>

        <div class="col-12">
          <label class="form-label d-block">Status</label>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="statusAktif" checked>
            <label class="form-check-label" for="statusAktif">Aktif</label>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="statusNonaktif">
            <label class="form-check-label" for="statusNonaktif">Nonaktif</label>
          </div>
        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="agreeCheck">
            <label class="form-check-label" for="agreeCheck">
              Saya memastikan data sudah benar.
            </label>
          </div>
        </div>

        <div class="col-12">
          <button type="button" class="btn btn-primary">
            Simpan
          </button>

          <button type="reset" class="btn btn-light">
            Reset
          </button>
        </div>
      </form>
    </div>
  </div>
</section>