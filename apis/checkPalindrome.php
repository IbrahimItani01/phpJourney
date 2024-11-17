<?php
$input = $_POST["input"];

function checkPalindrome($input) {
    $reversed = [];
    for ($i = strlen($input)-1; $i >= 0; $i--){
        array_push($reversed,$input[$i]);
    }
}