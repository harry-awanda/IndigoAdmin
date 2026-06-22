<section class="components-page">
    <div class="card app-card component-section">
    <div class="card-header app-card-header">
      <div>
        <h5 class="card-title mb-1">Modals</h5>
        <p class="card-subtitle">Dialog untuk detail data, form cepat, atau konfirmasi.</p>
      </div>
    </div>

    <div class="card-body">
      <div class="component-preview">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
          Basic Modal
        </button>

        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
          Delete Confirmation
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Basic Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Basic Modal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        Ini adalah contoh basic modal untuk menampilkan informasi singkat.
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center p-4">
        <div class="modal-danger-icon mx-auto mb-3">
          <i class="bi bi-trash"></i>
        </div>

        <h5>Hapus data?</h5>

        <p class="text-app-secondary">
          Data yang dihapus tidak dapat dikembalikan.
        </p>

        <div class="d-flex gap-2">
          <button type="button" class="btn btn-light w-100" data-bs-dismiss="modal">
            Batal
          </button>

          <button type="button" class="btn btn-danger w-100">
            Hapus
          </button>
        </div>
      </div>
    </div>
  </div>
</div>