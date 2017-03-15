<?php

/**
* recursive version of the fibonacci numbers
*/
function fibonacci($n)
{
   return $n < 2 ? $n : fibonacci($n-1) + fibonacci($n-2);
}

echo fibonacci(8);
