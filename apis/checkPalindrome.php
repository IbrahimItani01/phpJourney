<?php
$input = $_POST["input"];

function checkPalindrome($input) {
    $reversed = [];
    for ($i = strlen($input)-1; $i >= 0; $i--){
        array_push($reversed,$input[$i]);
    }
    $reversedString = implode("",$reversed);
    if($reversedString == $input){
        return true;
    }
    else{
        return false;
    }
}
if(checkPalindrome($input)){
    http_response_code(200);
    $response = [
        "status" => "success",
        "message"=> "Palindrome is checked successfully",
        "return"=> true,
    ];
}
else{
    http_response_code(404);
    $response = [
        "status" => "failed",
        "message"=> "Palindrome is checked unsuccessfully",
        "return"=> false,
    ];
}
echo json_encode($response);
