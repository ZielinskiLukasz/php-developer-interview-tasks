<?php 

/**
 * Write a function that takes two words as an argument 
 * and returns true if they are anagrams 
 * (contain the exact same letters) and false otherwise.
 * case insensitive version
 */

function anagram(string $first, string $second) : bool
{
    if(strlen($first) != strlen($second)){
        return false;
    }

    if(sortString(strtolower($first)) === sortString(strtolower($second))) {
        return true;
    }

    return false;
}

function sortString(string $input) : string
{
    $stringParts = str_split($input);
    sort($stringParts);
    return implode('', $stringParts);
}

var_dump(anagram('abc', 'cab')); // true
var_dump(anagram('abc', 'BAC')); // true
var_dump(anagram('abc', 'abcc')); // false
