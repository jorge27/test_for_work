<?php

include "base.php";

class Register extends Base{
    public function get() {
        $this->render("register_form.php");
    }

    public function post() {
        if($this->validate()) {
            echo "email exists...";
            return $this->get();
        }

        $new_user = $this->mysqli->query('INSERT INTO users(name, email, password, created_at, updated_at) values( "'.$this->post['name'].'", "'.$this->post['email'].'", "'.password_hash($this->post['password'], PASSWORD_DEFAULT).'", "'.date('Y-m-d H:i:s.u').'", "'.date('Y-m-d H:i:s.u').'"  );');

        if(!$new_user) {
            echo 'error in database';
            return $this->get();
        }

        $user = $this->mysqli->query('SELECT * FROM users WHERE email like "'.$this->post['email'].'" LIMIT 1');
        $user = $user->fetch_assoc();

        $_SESSION['user'] = ['id' => $user['id'], 'name' => $this->post['name'], 'email' => $this->post['name']];
        return $this->get();
    }

    protected function validate() {
        $check_email = $this->mysqli->query('SELECT * FROM users WHERE email like "'.$this->post['email'].'" LIMIT 1');
        if (!$check_email->num_rows) {
            return false;
        }
        return true;
    }
}

$class = new Register();