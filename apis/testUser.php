<?php

include "../classes/user.php";

$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
// boolean to check if the fetch is to copy or create new user instance
$copy = $_POST["copy"];
