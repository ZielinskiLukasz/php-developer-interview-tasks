<?php

function isPalindrome(string $s) : bool
{
    $h = round(strlen($s)/2);
    $n = strlen($s)-1;
    
    for ($i=0; $i<=$h; $i++) {
        if ($s[$i] != $s[$n-$i]) {
            return false;
        }
    }
    return true;
}

echo isPalindrome("abcdefedcba") ? "yes\n" : "no\n";
