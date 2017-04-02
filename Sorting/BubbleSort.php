<?php

/*
* Bubble sort
* Function sorts elements in the array passed as an argument
*/

function bubbleSort(array $arrayToSort) : array
{
    $size = count($arrayToSort);

    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
            if ($arrayToSort[$j+1] < $arrayToSort[$j]) {
                // swap elements
                list($arrayToSort[$j], $arrayToSort[$j+1]) = array($arrayToSort[$j+1],$arrayToSort[$j]);
            }
        }
    }
    return $arrayToSort;
}

$arrayToSort = array(4,7,6,5,9,8,76,67,35,23,10,1);
print_r(bubbleSort($arrayToSort));
