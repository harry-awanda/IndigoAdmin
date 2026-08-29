<section class="components-page form-layout-page">
  <div class="row g-4">
    <div class="col-xl-6">
      <div class="card app-card component-section">
        <div class="card-header"><h5 class="card-title mb-0">Basic Layout</h5></div>
        <div class="card-body">
          <form class="form-stack">
            <div><label class="form-label" for="verticalFullName">Full Name</label><input type="text" id="verticalFullName" class="form-control" placeholder="John Doe"></div>
            <div><label class="form-label" for="verticalEmail">Email</label><input type="email" id="verticalEmail" class="form-control" placeholder="john.doe@example.com"></div>
            <div><label class="form-label" for="verticalCompany">Company</label><input type="text" id="verticalCompany" class="form-control" placeholder="ThemeSelection"></div>
            <div><label class="form-label" for="verticalPhone">Phone No</label><input type="text" id="verticalPhone" class="form-control" placeholder="658 799 8941"></div>
            <div><label class="form-label" for="verticalMessage">Message</label><textarea id="verticalMessage" class="form-control" rows="3" placeholder="Hi, Do you have a moment to talk Joe?"></textarea></div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="verticalRemember"><label class="form-check-label" for="verticalRemember">Remember me</label></div>
            <div><button type="button" class="btn btn-primary me-2">Send</button><button type="reset" class="btn btn-light">Cancel</button></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card app-card component-section">
        <div class="card-header"><h5 class="card-title mb-0">Form Controls</h5></div>
        <div class="card-body">
          <form class="form-stack">
            <div><label class="form-label" for="verticalUsername">Username</label><div class="input-group"><span class="input-group-text">@</span><input type="text" id="verticalUsername" class="form-control" placeholder="johndoe"></div></div>
            <div><label class="form-label" for="verticalCountry">Country</label><select id="verticalCountry" class="form-select"><option selected>Australia</option><option>Bangladesh</option><option>Belarus</option><option>Brazil</option><option>Canada</option><option>Indonesia</option></select></div>
            <div><label class="form-label d-block">Language</label><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="verticalEnglish" checked><label class="form-check-label" for="verticalEnglish">English</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="verticalFrench"><label class="form-check-label" for="verticalFrench">French</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="verticalGerman"><label class="form-check-label" for="verticalGerman">German</label></div></div>
            <div><label class="form-label d-block">Gender</label><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="verticalGender" id="verticalMale" checked><label class="form-check-label" for="verticalMale">Male</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="verticalGender" id="verticalFemale"><label class="form-check-label" for="verticalFemale">Female</label></div></div>
            <div><label class="form-label" for="verticalBio">Bio</label><textarea id="verticalBio" class="form-control" rows="4" placeholder="Tell us about yourself"></textarea></div>
            <div><button type="button" class="btn btn-primary me-2">Submit</button><button type="reset" class="btn btn-light">Reset</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="card app-card component-section">
    <div class="card-header"><h5 class="card-title mb-0">Multi Column</h5></div>
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-6"><label class="form-label" for="multiFirstName">First Name</label><input type="text" id="multiFirstName" class="form-control" placeholder="John"></div>
        <div class="col-md-6"><label class="form-label" for="multiLastName">Last Name</label><input type="text" id="multiLastName" class="form-control" placeholder="Doe"></div>
        <div class="col-md-6"><label class="form-label" for="multiCity">City</label><input type="text" id="multiCity" class="form-control" placeholder="Jackson"></div>
        <div class="col-md-6"><label class="form-label" for="multiCountry">Country</label><select id="multiCountry" class="form-select"><option selected>United States</option><option>Canada</option><option>Indonesia</option><option>Australia</option></select></div>
        <div class="col-md-6"><label class="form-label" for="multiCompany">Company</label><input type="text" id="multiCompany" class="form-control" placeholder="Pixinvent"></div>
        <div class="col-md-6"><label class="form-label" for="multiPhone">Phone No</label><input type="text" id="multiPhone" class="form-control" placeholder="658 799 8941"></div>
        <div class="col-12"><label class="form-label" for="multiAddress">Address</label><textarea id="multiAddress" class="form-control" rows="3" placeholder="Address"></textarea></div>
        <div class="col-12"><button type="button" class="btn btn-primary me-2">Submit</button><button type="reset" class="btn btn-light">Reset</button></div>
      </form>
    </div>
  </div>
</section>