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
}