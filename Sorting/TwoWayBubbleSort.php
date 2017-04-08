<?php

/*
* Bi-rdirectional bubble sort, an improvement over normal bubble sort
*/
function twoWayBubbleSort($arrayToSort)
{
    if (!$length = count($arrayToSort)) {
        return $arrayToSort;
    }
    $start = -1;
    while ($start <  $length) {
        ++$start;
        --$length;
        for ($i= $start; $i <  $length; ++$i) {
            if ($arrayToSort[$i] > $arrayToSort[$i + 1]) {
                $ttmp = $arrayToSort[$i];
                $arrayToSort[$i] = $arrayToSort[$i + 1];
                $arrayToSort[$i + 1] = $ttmp;
            }
        }
        for ($i = $length; --$i >= $start;) {
            if ($arrayToSort[$i] > $arrayToSort[$i + 1]) {
                $ttmp = $arrayToSort[$i];
                $arrayToSort[$i] = $arrayToSort[$i + 1];
                $arrayToSort[$i + 1] = $ttmp;
            }
        }
    }

    return $arrayToSort;
}

$arrayToSort = array(4,7,6,5,9,8,76,67,35,23,10,1);
print_r(twoWayBubbleSort($arrayToSort));
