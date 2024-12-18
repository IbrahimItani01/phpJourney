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

    // > 1 method: copy_with taking optional parameters and returns a NEW user instance (copy) with the updated values that were passed.
    public static function validatePassword($password) {
        // bool to validate length
        $validateLength = strlen($password)>=12;
        // check if password has an uppercase letter
        $hasUpper = preg_match('/[A-Z]/',$password);
        // check if password has a lowercase letter
        $hasLower = preg_match('/[a-z]/',$password);
        // check if password has a special character (exclude word characters and include _)
        $hasSpecial = preg_match('/[\W_]/',$password);

        // return true if all booleans are truthy
        return $validateLength && $hasUpper && $hasLower && $hasSpecial;
    }

    public static function validateEmail($email){
        // used filter method to validate email form
        return filter_var($email, FILTER_VALIDATE_EMAIL)!=false;
    }

    public function copy_with($name = null,$email=null, $password=null) {
        return new User (
            $name ?? $this->name,
            $email ?? $this->email,
            $password ?? $this->password,
        );
    }
}