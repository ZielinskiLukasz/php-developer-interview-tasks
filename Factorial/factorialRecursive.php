<?php

/**
* recursive version of factorial: F(n) = n * F(n-1)
*/

function factorial($number)
{
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}

echo factorial(4);

