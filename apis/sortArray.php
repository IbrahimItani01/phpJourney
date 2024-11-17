<?php   
include "../classes/mergeSort.php";
$array = json_decode($_POST["array"]);
$lastIndex = count($array)-1;
mergeSort($array,0, $lastIndex);
$response = [
    "message"=>"Array sorted successfully",
    "sortedArray"=>$array,
];
http_response_code(200);
echo json_encode($response);