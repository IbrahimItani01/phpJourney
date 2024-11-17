<?php
function merge ($array,$left,$middle,$right){
    $lArrayLength = $middle - $left +1;
    $rArrayLength = $right - $middle;

    // temporary arrays
    $leftArray = array_slice($array,$left,$lArrayLength);
    $rightArray = array_slice($array,$middle+1,$rArrayLength);

    // indices to merge the arrays back to the main one
    $i = 0;
    $j = 0;
    $k = $left;
    
    while($i < $lArrayLength && $j<$rArrayLength){
        // comparing elements on both arrays 
        if($leftArray[$i]<=$rightArray[$j]){
            // in case the left array element is smaller set the value to the original array
            $array[$k] = $leftArray[$i];
            $i++;
        }
        else{
            // in case the right array element is smaller set the value to the original array
            $array[$k] = $rightArray[$j];
            $j++;
        }
        // increment the index at main array
        $k++;
    }
    // push remaining elements in left array to main array
    while ($i<$lArrayLength){
        $array[$k] = $leftArray[$i];
        $i++;
        $k++;
    }
    // push remaining elements in right array to main array
    while ($j<$rArrayLength){
        $array[$k] = $rightArray[$j];
        $j++;
        $k++;
    }

}

function mergeSort ($array,$left,$right){

} 