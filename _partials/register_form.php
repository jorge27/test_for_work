<div class="container">
  <form id="register_form" class="form" method="POST">
    <div class="form-group row">
      <label class="form-label col-12 col-md-3 d-flex jusntify-content-end">Name:</label>
      <div class="col-12 col-md-9">
        <input type="text" name="name" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="form-label col-12 col-md-3 d-flex jusntify-content-end">Email:</label>
      <div class="col-12 col-md-9">
        <input type="email" name="email" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="form-label col-12 col-md-3 d-flex jusntify-content-end">Password:</label>
      <div class="col-12 col-md-9">
        <input type="password" name="password" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="form-label col-12 col-md-3 d-flex jusntify-content-end">Repeat Password:</label>
      <div class="col-12 col-md-9">
        <input type="password" name="password_repeat" class="form-control">
      </div>
    </div>
    <button onclick="event.preventDefault(); validate_register();"  class="btn btn-primary btn-lg text-center">Register</button>
  </form>
</div>