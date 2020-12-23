<?php
include "base.php";

class Home extends Base{
    public function get() {
        $this->render("index.php");
    }

    public function post() {
        echo "nothing";
    }
}

$class = new Home();
