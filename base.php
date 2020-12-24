<?php

include "constants.php";

class Base
{
    protected $mysql;
    protected $post;
    protected $get;

    function __construct() {
        session_start();
        $this->database_init();

        $this->clean_method_variables();

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

    protected function db_insert($query) {
        return $this->mysqli->query($query);
    }

    private function clean_method_variables() {
        $this->get = [];
        $this->post = [];

        $reserverd_words = ["/insert/i", "/select/i", "/create/i", "/drop/i", "/from/i", "/where/i",  "/into/i",  "/update/i", "/;/i", "/database/i", "/\"/"];

        foreach ($_POST as $key => $value) {
            foreach ($reserverd_words as $word) {
                $this->post[$key] = preg_replace($word, '', $value);
            }
        }

        foreach ($_GET as $key => $value) {
            foreach ($reserverd_words as $word) {
                $this->get[$key] = preg_replace($word, '', $value);
            }
        }
    }
}