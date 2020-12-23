<?php

include "base.php";

class Register extends Base{
    public function get() {
        $this->render("register_form.php");
    }

    public function post() {
        echo "nothing";
    }
}

$class = new Register();