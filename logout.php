<?php

include "base.php";

class Logout extends Base{
    public function get() {
        return $this->render('index.php');
    }

    public function post() {
        session_destroy();
        header('Location: /');
    }
}

$call = new Logout();