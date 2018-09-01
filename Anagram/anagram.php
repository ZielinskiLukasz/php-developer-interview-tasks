<?php 

/**
 * Write a function that takes two words as an argument 
 * and returns true if they are anagrams 
 * (contain the exact same letters) and false otherwise.
 */

function anagram(string $first, string $second) : bool
{
    return(count_chars($first, 1) == count_chars($second, 1));
}

var_dump(anagram('abc', 'cab'));
var_dump(anagram('abc', 'abcc'));