<?php

include "../classes/linkedLists.php";

$words = json_decode($_POST["words"]);

$list = new linkedList();

for( $i = 0; $i < count($words); $i++ ){
    $list->addNode($words[$i]);
}

$validatedNodes = $list->validateNodes();

if(count($validatedNodes) > 0){
    http_response_code(200);
    $response = [
        "message"=>"validated words where found",
        "array"=>$validatedNodes,
    ];
}
