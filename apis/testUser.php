<?php

include "../classes/user.php";

$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
// boolean to check if the fetch is to copy or create new user instance
$copy = $_POST["copy"]??false;
// in case of copy_with
$newName = $_POST["newName"]??"";
$newEmail = $_POST["newEmail"]??"";
$newPassword = $_POST["newPassword"]??"";

if (!$copy){
    
    if(User::validatePassword($password) && User::validateEmail($email)){
        $user = new User($email,$password,$name);
        http_response_code(201);
        $response = [
            "status"=> "success",
            "message"=> "created user instance successfully",
        ];
    }else{
        http_response_code(400);
        $response = [
            "status"=> "bad request",
            "message"=> "either email or password not validated",
        ];
    }
}
else{
    if (!isset($user)) {
        // Create an initial user instance if one does not exist
        $user = new User($name, $email, $password);
    }
