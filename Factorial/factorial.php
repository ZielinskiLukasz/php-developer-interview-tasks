<?php

function factorial(int $n) : int
{
    $fact = 1;
    for ($i=1; $i<=$n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

$n = 4;
echo factorial($n);
