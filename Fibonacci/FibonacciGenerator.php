<?php

/**
* returns n number of elements of the Fibonacci sequence using PHP generators
*/

function getFibonacci()
{
    $first = 0;
    $second = 1;
    yield $second;
    while (true) {
        $second = $first + $second;
        $first = $second - $first;
        yield $second;
    }
}

function fib(int $n)
{
    $y = 0;
    foreach (getFibonacci() as $fibonacci) {
        echo $fibonacci . "\n";
        $y++;
        if ($y >= $n) break;
    }
}
echo fib(8);
