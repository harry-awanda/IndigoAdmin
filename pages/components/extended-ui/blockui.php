<section class="components-page extended-ui-page">
  <div class="card app-card component-section">
    <div class="card-header"><h5 class="card-title mb-0">Basic Examples</h5></div>
    <div class="card-body">
      <p class="text-app-secondary">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim at mea.</p>
      <div class="component-preview" data-block-target="#blockBasic">
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockBasic">Default</button>
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockBasic" data-blockui-variant="primary">Overlay Color</button>
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockBasic" data-blockui-spinner="grow">Custom Spinner</button>
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockBasic" data-blockui-message="Please wait...">Custom Message</button>
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockBasic" data-blockui-message="Loading invoices...|Checking permissions...|Almost done...">Multiple Message</button>
      </div>
      <div class="block-demo-panel mt-3" id="blockBasic">
        <h6>Content Area</h6>
        <p class="mb-0 text-app-secondary">This section is blocked for a short moment when an action button is selected.</p>
      </div>
    </div>
  </div>

  <div class="card app-card component-section" id="blockCard">
    <div class="card-header"><h5 class="card-title mb-0">Card Blocking</h5></div>
    <div class="card-body">
      <p class="text-app-secondary">Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis neglegentur ut, oporteat salutandi dignissim.</p>
      <div class="component-preview">
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockCard">Default</button>
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockCard" data-blockui-variant="primary">Overlay Color</button>
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockCard" data-blockui-spinner="grow">Custom Spinner</button>
        <button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockCard" data-blockui-message="Saving card...">Custom Message</button>
      </div>
    </div>
  </div>

  <div class="card app-card component-section">
    <div class="card-header"><h5 class="card-title mb-0">Page Blocking</h5></div>
    <div class="card-body">
      <p class="text-app-secondary">Use page blocking when the whole page has to wait for a process to finish.</p>
      <div class="component-preview"><button class="btn btn-primary" type="button" data-blockui data-blockui-target="body" data-blockui-message="Loading page...">Default</button><button class="btn btn-primary" type="button" data-blockui data-blockui-target="body" data-blockui-variant="primary" data-blockui-message="Preparing workspace...">Overlay Color</button></div>
    </div>
  </div>

  <div class="card app-card component-section" id="blockForm">
    <div class="card-header"><h5 class="card-title mb-0">Form Block</h5></div>
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-4"><label class="form-label" for="blockUsername">Username</label><input class="form-control" id="blockUsername" type="text" value="username"></div>
        <div class="col-md-4"><label class="form-label" for="blockEmail">Email</label><input class="form-control" id="blockEmail" type="email" placeholder="Email"></div>
        <div class="col-md-4"><label class="form-label" for="blockPassword">Password</label><input class="form-control" id="blockPassword" type="password" placeholder="Password"></div>
        <div class="col-12"><button class="btn btn-primary" type="button" data-blockui data-blockui-target="#blockForm" data-blockui-message="Submitting form...">Submit</button><button class="btn btn-light ms-2" type="reset">Reset</button></div>
      </form>
    </div>
  </div>
</section>