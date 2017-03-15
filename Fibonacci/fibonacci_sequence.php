<?php

/**
* returns the whole Fibonacci sequence to the n-th element
*/
function fibonacci(int $n) : array
{
    $fib = array(0,1);
    for ($i=1;$i<$n;$i++) {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}

echo '<pre>';
print_r(fibonacci(8));
echo '</pre>';
