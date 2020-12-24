<?php

include "base.php";

class SignIn extends Base{
    public function get() {
        $this->render("login_form.php");
    }

    public function post() {
        if ($this->validate()) {
            echo "Email doesn't exists in our records";
            return $this->get();
        }
        
        $user = $this->mysqli->query('SELECT * FROM users WHERE email like "'.$this->post['email'].'" LIMIT 1');
        $user = $user->fetch_assoc();
        $password = $user['password'];

        if (!password_verify($this->post['password'], $password)) {
            echo "password is wrong";    
            return $this->get();
        }

        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'email' => $user['email']];
        return $this->render('index.php');
    }

    protected function validate() {
        $check_email = $this->mysqli->query('SELECT * FROM users WHERE email like "'.$this->post['email'].'" LIMIT 1');
        if ($check_email->num_rows) {    
            return false;
        }
        return true;
    }
}

$class = new SignIn();