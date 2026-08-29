<section class="components-page extended-ui-page">
  <div class="card app-card component-section">
    <div class="card-header"><h5 class="card-title mb-0">Basic Sweet Alerts</h5></div>
    <div class="card-body">
      <div class="component-preview">
        <button class="btn btn-primary" type="button" data-app-alert="basic">Basic</button>
        <button class="btn btn-info" type="button" data-app-alert="info">Info</button>
        <button class="btn btn-success" type="button" data-app-alert="success">Success</button>
        <button class="btn btn-warning" type="button" data-app-alert="warning">Warning</button>
        <button class="btn btn-danger" type="button" data-app-alert="error">Error</button>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-xl-6"><div class="card app-card component-section"><div class="card-header"><h5 class="card-title mb-0">Confirm Button Text</h5></div><div class="card-body"><p class="text-app-secondary">A confirmation dialog with custom confirm and cancel buttons.</p><button class="btn btn-primary" type="button" data-app-alert="confirm">Confirm dialog</button></div></div></div>
    <div class="col-xl-6"><div class="card app-card component-section"><div class="card-header"><h5 class="card-title mb-0">Timer Alert</h5></div><div class="card-body"><p class="text-app-secondary">A short alert that closes automatically after a moment.</p><button class="btn btn-primary" type="button" data-app-alert="timer">Timer alert</button></div></div></div>
  </div>

  <div class="app-alert-backdrop" id="appAlertBackdrop" hidden>
    <div class="app-alert-dialog" role="dialog" aria-modal="true" aria-labelledby="appAlertTitle">
      <div class="app-alert-icon" id="appAlertIcon"><i class="bi bi-info-circle"></i></div>
      <h5 id="appAlertTitle">Alert title</h5>
      <p id="appAlertMessage">Alert message</p>
      <div class="app-alert-actions" id="appAlertActions"><button class="btn btn-primary" type="button" data-app-alert-close>OK</button></div>
    </div>
  </div>
</section>