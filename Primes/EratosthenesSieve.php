<?php

/**
 * Seive of Eratosthenes algorythm.
 */
function EratosthenesPrimes($limit) : array
{
    $number = 2;
    $range = range(2, $limit);
    $primes = array_combine($range, $range);
 
    while ($number*$number < $limit) {
        for ($i = $number; $i <= $limit; $i += $number) {
            if ($i == $number) {
                continue;
            }
            unset($primes[$i]);
        }
        $number = next($primes);
    }
    return $primes;
}

$primes = EratosthenesPrimes(100);
print_r($primes);
