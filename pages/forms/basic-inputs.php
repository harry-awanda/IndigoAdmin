<section class="components-page form-elements-page">
  <div class="row g-4">
    <div class="col-xl-6">
      <div class="card app-card component-section">
        <div class="card-header"><h5 class="card-title mb-0">Input Text</h5></div>
        <div class="card-body form-stack">
          <div><label class="form-label" for="basicDefaultName">Default</label><input type="text" class="form-control" id="basicDefaultName" placeholder="John Doe"></div>
          <div><label class="form-label" for="basicReadonly">Readonly</label><input type="text" class="form-control" id="basicReadonly" value="Readonly input here..." readonly></div>
          <div><label class="form-label" for="basicDisabled">Disabled</label><input type="text" class="form-control" id="basicDisabled" placeholder="Disabled input here..." disabled></div>
          <div><label class="form-label" for="basicHelpText">With Help Text</label><input type="text" class="form-control" id="basicHelpText" placeholder="Public display name"><div class="form-text">Your display name may appear around IndigoAdmin.</div></div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card app-card component-section">
        <div class="card-header"><h5 class="card-title mb-0">Input Sizing</h5></div>
        <div class="card-body form-stack">
          <input class="form-control form-control-lg" type="text" placeholder="Large input">
          <input class="form-control" type="text" placeholder="Default input">
          <input class="form-control form-control-sm" type="text" placeholder="Small input">
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-xl-6"><div class="card app-card component-section"><div class="card-header"><h5 class="card-title mb-0">Floating Labels</h5></div><div class="card-body form-stack"><div class="form-floating"><input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com"><label for="floatingEmail">Email address</label></div><div class="form-floating"><input type="password" class="form-control" id="floatingPassword" placeholder="Password"><label for="floatingPassword">Password</label></div><div class="form-floating"><textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea><label for="floatingTextarea">Comments</label></div></div></div></div>
    <div class="col-xl-6"><div class="card app-card component-section"><div class="card-header"><h5 class="card-title mb-0">HTML5 Inputs</h5></div><div class="card-body form-stack"><input class="form-control" type="email" value="name@example.com" aria-label="Email input"><input class="form-control" type="url" value="example.com" aria-label="URL input"><input class="form-control" type="tel" value="1-(555)-555-5555" aria-label="Telephone input"><input class="form-control" type="number" value="18" aria-label="Number input"><input class="form-control" type="search" placeholder="Search..." aria-label="Search input"></div></div></div>
  </div>

  <div class="row g-4">
    <div class="col-xl-6"><div class="card app-card component-section"><div class="card-header"><h5 class="card-title mb-0">Textarea</h5></div><div class="card-body form-stack"><textarea class="form-control" rows="3" placeholder="Textarea"></textarea><textarea class="form-control" rows="5" placeholder="Large textarea"></textarea></div></div></div>
    <div class="col-xl-6"><div class="card app-card component-section"><div class="card-header"><h5 class="card-title mb-0">Validation States</h5></div><div class="card-body form-stack"><div><label class="form-label" for="validInput">Valid Input</label><input type="text" class="form-control is-valid" id="validInput" value="Valid value"><div class="valid-feedback">Looks good!</div></div><div><label class="form-label" for="invalidInput">Invalid Input</label><input type="text" class="form-control is-invalid" id="invalidInput" value="Invalid value"><div class="invalid-feedback">Please provide a valid value.</div></div></div></div></div>
  </div>
</section>