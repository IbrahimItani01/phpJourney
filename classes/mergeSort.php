<?php
function merge ($array,$left,$middle,$right){
    $lArrayLength = $middle - $left +1;
    $rArrayLength = $right - $middle;

    // temporary arrays
    $leftArray = array_slice($array,$left,$lArrayLength);
    $rightArray = array_slice($array,$middle+1,$rArrayLength);

    
}

function mergeSort ($array,$left,$right){

} 