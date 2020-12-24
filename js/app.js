window.validate_login = () => {
  // calling email
  var email = document.querySelector('#login_form input[name="email"]').value;
  var password = document.querySelector('#login_form input[name="password"]').value;

  if (!validate_email(email)) {
    launch_toast('Email not valid');
  }

  if (password.length < 5) {
    launch_toast('Password not valid');
    return;
  }

  document.getElementById('login_form').submit();
}

window.validate_register = () => {
  var name = document.querySelector('#register_form input[name="name"]').value;
  var email = document.querySelector('#register_form input[name="email"]').value;
  var password = document.querySelector('#register_form input[name="password"]').value;
  var rep_password = document.querySelector('#register_form input[name="password_repeat"]').value;

  if (name.length < 5) {
    console.log('Name must be more than 5 characters');
    launch_toast('Name must be more than 5 characters');
    return;
  }

  if (!validate_email(email)) {
    console.log('Email not valid');
    launch_toast('Email not valid');
    return;
  }

  if (password.length < 5) {
    console.log('Password not valid');
    launch_toast('Password not valid');
    return;
  }

  if (password !== rep_password) {
    console.log('Password repeat dont match');
    launch_toast('Password repeat dont match');
    return;
  }

  document.getElementById('register_form').submit();
}

window.launch_toast = (message) => {
  toast = '<div id="alerts" style="position: absolute; top: 15px; right: 15px; z-index: 90"><div class="toast" role="alert" aria-live="polite" data-bs-autohide="false"><div class="toast-header"><div class="bg-info rounded mr-2" style="width: 20px; height: 20px;">&nbsp;</div><strong class="mr-auto">Notification</strong><small class="text-muted">&nbsp;</small><button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button></div><div class="toast-body">' + message + '</div></div>';
  toast = new DOMParser().parseFromString(toast, 'text/xml');
  document.body.append(toast);
}

window.validate_email = (email) => {
  // validate if contains @
  if ((elem = email.split('@')).length !== 2) {
    return false;
  }

  //check if contains .
  if (elem[elem.length - 1].split('.').length < 2) {
    return false;
  }

  return true;
}

window.change_password = () => {
  var password = document.querySelector('#change_password_form input[name="password"]').value;
  var rep_password = document.querySelector('#change_password_form input[name="repeat_password"]').value;

  if (password.length < 5) {
    console.log('Password not valid');
    launch_toast('Password not valid');
    return;
  }

  if (password !== rep_password) {
    console.log('Password repeat dont match');
    launch_toast('Password repeat dont match');
    return;
  }

  document.getElementById('change_password_form').submit();
}