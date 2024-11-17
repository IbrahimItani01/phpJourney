<?php

include "../classes/linkedLists.php";

$words = json_decode($_POST["words"]);

$list = new linkedList();

for( $i = 0; $i < count($words); $i++ ){
    $list->addNode($words[$i]);
}
