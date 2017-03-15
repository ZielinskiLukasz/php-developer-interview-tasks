<?php

/**
* returns n-th element of the Fibonacci sequence
*/
function fib(int $n) : int
{
    $first=0;
    $second=1;
    for ($i=2;$i<=$n;$i++) {
        $l=$second;
        $second=$first+$second;
        $first=$l;
    }
    return $second;
}

echo fib(8);
