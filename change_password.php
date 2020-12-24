<?php

include "base.php";

class ChangePassword extends Base{
    public function get() {
        return $this->render('form_change_password.php');
    }

    public function post() {
        $this->mysqli->query('UPDATE users SET password = "'.password_hash($this->post['password'], PASSWORD_DEFAULT).'" WHERE id = '.$_SESSION['user']['id']);
        return $this->render('index.php');
    }
}

$call = new ChangePassword();