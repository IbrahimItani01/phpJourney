<?php

include "../classes/user.php";

$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
// boolean to check if the fetch is to copy or create new user instance
$copy = $_POST["copy"]??false;
// in case of copy_with
$newName = $_POST["newName"]??null;
$newEmail = $_POST["newEmail"]??null;
$newPassword = $_POST["newPassword"]??null;

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

    // Copy the user with new values
    $copiedUser = $user->copy_with($newName, $newEmail, $newPassword);
    http_response_code(201);
    $response = [
        "status" => "success",
        "message" => "Copied user instance successfully",
        "originalUser" => [
            "id" => $user->id,
            "name" => $user->name,
            "email" => $user->email,
        ],
        "copiedUser" => [
            "id" => $copiedUser->id,
            "name" => $copiedUser->name,
            "email" => $copiedUser->email,
        ],
    ];
}
echo json_encode($response);