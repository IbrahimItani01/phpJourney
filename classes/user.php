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
    public static function validatePassword($password) {
        // bool to validate length
        $validateLength = strlen($password)>=12;
        // check if password has an uppercase letter
        $hasUpper = preg_match('/[A-Z]/',$password);
        // check if password has a lowercase letter
        $hasLower = preg_match('/[a-z]/',$password);
}