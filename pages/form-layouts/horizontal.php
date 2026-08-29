<section class="components-page form-layout-page">
  <div class="card app-card component-section">
    <div class="card-header"><h5 class="card-title mb-0">Horizontal Form</h5></div>
    <div class="card-body">
      <form class="form-horizontal-stack">
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label" for="horizontalFirstName">First Name</label><div class="col-sm-9"><input type="text" id="horizontalFirstName" class="form-control" placeholder="John"></div></div>
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label" for="horizontalEmail">Email</label><div class="col-sm-9"><input type="email" id="horizontalEmail" class="form-control" placeholder="john.doe@example.com"><div class="form-text">You can use letters, numbers, and periods.</div></div></div>
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label" for="horizontalContact">Contact No</label><div class="col-sm-9"><input type="text" id="horizontalContact" class="form-control" placeholder="658 799 8941"></div></div>
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label" for="horizontalCompany">Company</label><div class="col-sm-9"><input type="text" id="horizontalCompany" class="form-control" placeholder="ThemeSelection"></div></div>
        <div class="row g-3"><label class="col-sm-3 col-form-label" for="horizontalMessage">Message</label><div class="col-sm-9"><textarea id="horizontalMessage" class="form-control" rows="3" placeholder="Hi, Do you have a moment to talk Joe?"></textarea></div></div>
        <div class="row g-3"><div class="col-sm-9 offset-sm-3"><div class="form-check"><input class="form-check-input" type="checkbox" id="horizontalRemember"><label class="form-check-label" for="horizontalRemember">Remember me</label></div></div></div>
        <div class="row"><div class="col-sm-9 offset-sm-3"><button type="button" class="btn btn-primary me-2">Send</button><button type="reset" class="btn btn-light">Cancel</button></div></div>
      </form>
    </div>
  </div>

  <div class="card app-card component-section">
    <div class="card-header"><h5 class="card-title mb-0">Horizontal Form Label Sizing</h5></div>
    <div class="card-body">
      <form class="form-horizontal-stack">
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label col-form-label-lg" for="horizontalLarge">Large</label><div class="col-sm-9"><input type="text" class="form-control form-control-lg" id="horizontalLarge" placeholder="Large input"></div></div>
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label" for="horizontalDefault">Default</label><div class="col-sm-9"><input type="text" class="form-control" id="horizontalDefault" placeholder="Default input"></div></div>
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label col-form-label-sm" for="horizontalSmall">Small</label><div class="col-sm-9"><input type="text" class="form-control form-control-sm" id="horizontalSmall" placeholder="Small input"></div></div>
      </form>
    </div>
  </div>

  <div class="card app-card component-section">
    <div class="card-header"><h5 class="card-title mb-0">Horizontal Validation States</h5></div>
    <div class="card-body">
      <form class="form-horizontal-stack">
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label" for="horizontalValid">Valid Field</label><div class="col-sm-9"><input type="text" id="horizontalValid" class="form-control is-valid" value="John Doe"><div class="valid-feedback">Looks good.</div></div></div>
        <div class="row align-items-center g-3"><label class="col-sm-3 col-form-label" for="horizontalInvalid">Invalid Field</label><div class="col-sm-9"><input type="text" id="horizontalInvalid" class="form-control is-invalid" value=""><div class="invalid-feedback">This field is required.</div></div></div>
        <div class="row"><div class="col-sm-9 offset-sm-3"><button type="button" class="btn btn-primary me-2">Submit</button><button type="reset" class="btn btn-light">Reset</button></div></div>
      </form>
    </div>
  </div>
</section>