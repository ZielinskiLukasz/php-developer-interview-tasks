<?php

function shellSort($array)
{
    if (!$length = count($array)) {
        return $array;
    }
    $k = 0;
    $gap[0] = (int)($length/2);
    while ($gap[$k]>1) {
        $k++;
        $gap[$k] = (int)($gap[$k-1]/2);
    }
 
    for ($i = 0; $i <= $k; $i++) {
        $step = $gap[$i];
        for ($j = $step; $j<$length; $j++) {
            $temp = $array[$j];
            $p = $j-$step;
            while ($p >= 0 && $temp < $array[$p]) {
                $array[$p+$step] = $array[$p];
                $p = $p-$step;
            }
            $array[$p+$step] = $temp;
        }
    }
    return $array;
}

$arrayToSort = array(4,7,6,5,9,8,76,67,35,23,10,1);
print_r(shellSort($arrayToSort));
