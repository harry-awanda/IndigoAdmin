<section class="components-page form-layout-page">
  <div class="card app-card component-section form-sticky-card">
    <div class="card-header form-sticky-header">
      <div>
        <h5 class="card-title mb-1">Account Details</h5>
        <p class="card-subtitle mb-0">A long form with sticky action buttons.</p>
      </div>
      <div class="form-sticky-actions">
        <button type="button" class="btn btn-primary"><i class="bi bi-check2 me-1"></i>Save</button>
        <button type="reset" form="stickyActionsForm" class="btn btn-light">Cancel</button>
      </div>
    </div>
    <div class="card-body">
      <form id="stickyActionsForm" class="form-stack">
        <div class="form-section-title"><span>Personal Information</span></div>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label" for="stickyFirstName">First Name</label><input type="text" id="stickyFirstName" class="form-control" placeholder="John"></div>
          <div class="col-md-6"><label class="form-label" for="stickyLastName">Last Name</label><input type="text" id="stickyLastName" class="form-control" placeholder="Doe"></div>
          <div class="col-md-6"><label class="form-label" for="stickyEmail">Email</label><input type="email" id="stickyEmail" class="form-control" placeholder="john.doe@example.com"></div>
          <div class="col-md-6"><label class="form-label" for="stickyPhone">Phone Number</label><input type="text" id="stickyPhone" class="form-control" placeholder="658 799 8941"></div>
          <div class="col-md-6"><label class="form-label" for="stickyBirthday">Birthday</label><input type="date" id="stickyBirthday" class="form-control" value="1995-04-18"></div>
          <div class="col-md-6"><label class="form-label" for="stickyGender">Gender</label><select id="stickyGender" class="form-select"><option selected>Male</option><option>Female</option><option>Other</option></select></div>
        </div>

        <div class="form-section-title"><span>Address Information</span></div>
        <div class="row g-3">
          <div class="col-12"><label class="form-label" for="stickyAddress">Address</label><input type="text" id="stickyAddress" class="form-control" placeholder="Address"></div>
          <div class="col-md-6"><label class="form-label" for="stickyCity">City</label><input type="text" id="stickyCity" class="form-control" placeholder="New York"></div>
          <div class="col-md-6"><label class="form-label" for="stickyState">State</label><input type="text" id="stickyState" class="form-control" placeholder="New York"></div>
          <div class="col-md-6"><label class="form-label" for="stickyZip">Zip Code</label><input type="text" id="stickyZip" class="form-control" placeholder="10001"></div>
          <div class="col-md-6"><label class="form-label" for="stickyCountry">Country</label><select id="stickyCountry" class="form-select"><option selected>United States</option><option>Canada</option><option>Indonesia</option><option>Australia</option><option>Germany</option></select></div>
        </div>

        <div class="form-section-title"><span>Company Information</span></div>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label" for="stickyCompany">Company</label><input type="text" id="stickyCompany" class="form-control" placeholder="ThemeSelection"></div>
          <div class="col-md-6"><label class="form-label" for="stickyRole">Role</label><input type="text" id="stickyRole" class="form-control" placeholder="Product Manager"></div>
          <div class="col-md-6"><label class="form-label" for="stickyDepartment">Department</label><select id="stickyDepartment" class="form-select"><option selected>Design</option><option>Engineering</option><option>Finance</option><option>Operations</option></select></div>
          <div class="col-md-6"><label class="form-label" for="stickyEmployeeId">Employee ID</label><input type="text" id="stickyEmployeeId" class="form-control" placeholder="EMP-1024"></div>
          <div class="col-12"><label class="form-label" for="stickyBio">Bio</label><textarea id="stickyBio" class="form-control" rows="4" placeholder="Write a short profile summary"></textarea></div>
        </div>

        <div class="form-section-title"><span>Preferences</span></div>
        <div class="row g-3">
          <div class="col-md-6"><label class="form-label d-block">Notifications</label><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="stickyEmailNotif" checked><label class="form-check-label" for="stickyEmailNotif">Email notifications</label></div><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="stickySmsNotif"><label class="form-check-label" for="stickySmsNotif">SMS notifications</label></div></div>
          <div class="col-md-6"><label class="form-label d-block">Language</label><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="stickyLangEnglish" checked><label class="form-check-label" for="stickyLangEnglish">English</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="stickyLangFrench"><label class="form-check-label" for="stickyLangFrench">French</label></div><div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="stickyLangGerman"><label class="form-check-label" for="stickyLangGerman">German</label></div></div>
        </div>

        <div class="form-bottom-actions">
          <button type="button" class="btn btn-primary"><i class="bi bi-check2 me-1"></i>Save Changes</button>
          <button type="reset" class="btn btn-light">Reset</button>
        </div>
      </form>
    </div>
  </div>
</section>