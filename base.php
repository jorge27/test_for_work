<?php

include "constants.php";

class Base
{
    protected $mysql;

    function __construct() {
        session_start();
        $this->database_init();
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                return $this->get();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                return $this->post();
        }
    }

    protected function render($file) {
        require_once '_partials/header.php';
        require_once '_partials/'.$file;
        require_once '_partials/footer.php';
    }

    protected function database_init() {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
            exit();
        }
        // echo $this->mysqli->host_info . "\n";
    }

    public function db_query($query) {
        return $this->mysqli->query($query)->fetch_assoc();
    }
}