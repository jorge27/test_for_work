  <div class="container">
    <form id="change_password_form" class="form" method="POST">
      <div class="form-group row">
        <label class="form-label col-12 col-md-3 d-flex jusntify-content-end">Password:</label>
        <div class="col-12 col-md-9">
          <input type="password" name="password" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="form-label col-12 col-md-3 d-flex jusntify-content-end">Repeat Password:</label>
        <div class="col-12 col-md-9">
          <input type="password" name="repeat_password" class="form-control">
        </div>
      </div>
      <button onclick="event.preventDefault(); change_password();" class="btn btn-primary btn-lg text-center">Change password</button>
    </form>
  </div>