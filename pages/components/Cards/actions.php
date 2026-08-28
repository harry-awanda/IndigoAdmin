<section class="components-page cards-showcase">
  <div class="row g-3">
    <div class="col-12 col-md-6 col-xl-4">
      <div class="card app-card h-100">
        <div class="card-header app-card-header">
          <div><h5 class="card-title mb-1">Dropdown Action</h5><p class="card-subtitle">Compact action pattern.</p></div>
          <div class="dropdown">
            <button class="btn btn-light btn-icon" type="button" data-bs-toggle="dropdown" aria-label="Card actions"><i class="bi bi-three-dots-vertical"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="coming-soon.php">Edit</a></li>
              <li><a class="dropdown-item" href="coming-soon.php">Duplicate</a></li>
              <li><a class="dropdown-item text-danger" href="coming-soon.php">Delete</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body">
          <p class="text-app-secondary mb-4">Secondary actions stay available without making the card visually noisy.</p>
          <div class="d-flex align-items-center gap-2"><span class="avatar avatar-success"><i class="bi bi-check2"></i></span><div><h6 class="mb-0">Published</h6><span class="text-app-muted small">Last update 12 minutes ago</span></div></div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4">
      <div class="card app-card h-100 cards-announcement">
        <div class="card-body">
          <div class="d-flex align-items-start justify-content-between gap-3 mb-3"><div class="icon-box"><i class="bi bi-megaphone"></i></div><button class="btn btn-light btn-icon btn-sm" type="button" aria-label="Dismiss announcement"><i class="bi bi-x-lg"></i></button></div>
          <h5 class="card-title mb-2">Dismiss Card</h5>
          <p class="text-app-secondary mb-4">Use a dismiss action for announcements, onboarding tips, or optional notices.</p>
          <div class="d-flex flex-wrap gap-2"><button class="btn btn-primary btn-sm" type="button">Accept</button><button class="btn btn-light btn-sm" type="button">Later</button></div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-xl-4">
      <div class="card app-card h-100">
        <img src="Assets/img/cards/webinar-cover.png" class="cards-media" alt="Workshop card action">
        <div class="card-body"><span class="badge badge-soft-info mb-3">Workshop</span><h5 class="card-title mb-2">Action Footer</h5><p class="text-app-secondary mb-0">A media card can keep its main action in the footer for a calmer layout.</p></div>
        <div class="app-card-footer"><span>24 seats left</span><a href="coming-soon.php" class="card-footer-link">Reserve</a></div>
      </div>
    </div>
  </div>

  <div class="row g-3">
    <div class="col-12 col-lg-6">
      <div class="card app-card h-100 cards-selectable">
        <div class="card-body"><div class="d-flex align-items-start gap-3"><span class="cards-select-indicator"><i class="bi bi-check2"></i></span><div><h5 class="card-title mb-2">Selectable Card</h5><p class="text-app-secondary mb-3">A selected state can live directly in static markup without extra state handling.</p><div class="d-flex flex-wrap gap-2"><span class="badge badge-soft-primary">Selected</span><span class="badge badge-soft-success">Static Markup</span></div></div></div></div>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="card app-card h-100">
        <div class="card-body d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3"><div><h5 class="card-title mb-2">Inline CTA Card</h5><p class="text-app-secondary mb-0">Pair short summary copy with immediate primary and secondary actions.</p></div><div class="d-flex flex-wrap gap-2"><button type="button" class="btn btn-primary btn-sm">Start</button><button type="button" class="btn btn-light btn-sm">Details</button></div></div>
      </div>
    </div>
  </div>
</section>
