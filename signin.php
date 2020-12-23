<?php

include "base.php";

class SignIn extends Base{
    public function get() {
        $this->render("login_form.php");
    }

    public function post() {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
}

$class = new SignIn();