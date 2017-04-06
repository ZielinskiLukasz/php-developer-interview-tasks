<?php

/*
* QuickSort - 'simple' implementation
*/
function simpleQuickSort(array $arrayToSort) : array
{
    if (count($arrayToSort) <= 1) {
        return $arrayToSort;
    } else {
        $pivot = $arrayToSort[0];
        $left = $right = array();
        
        for ($i = 1; $i < count($arrayToSort); $i++) {
            if ($arrayToSort[$i] < $pivot) {
                $left[] = $arrayToSort[$i];
            } else {
                $right[] = $arrayToSort[$i];
            }
        }
        return array_merge(simpleQuickSort($left), array($pivot), simpleQuickSort($right));
    }
}

$arrayToSortayToSort = array(4,7,6,5,9,8,76,67,35,23,10,1);
print_r(simpleQuickSort($arrayToSortayToSort));
