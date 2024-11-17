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
