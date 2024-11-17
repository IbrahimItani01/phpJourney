<?php

class User {
    public $email;
    public $password;
    public $name;
    public $id;


    public function __construct($email, $password,$name) {
        $this->id = $this->generateId();
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }
    private function generateId() {
        return uniqid('user_',true);
    }
}