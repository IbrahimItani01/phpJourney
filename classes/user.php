<?php

class User {
    public $email;
    public $password;
    public $name;
    public $userId;


    public function __construct($email, $password,$name) {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }
}