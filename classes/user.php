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

    // > 2 static methods: check_password validating the password to be at least 12 characters having at least 1 uppercase, 1 lowercase and 1 special character and validate_email to validate the the email format.
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
}