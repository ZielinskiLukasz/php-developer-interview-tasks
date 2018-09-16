<?php 

/**
 * Write a function that takes two words as an argument 
 * and returns true if they are anagrams 
 * (contain the exact same letters) and false otherwise.
 * (without using count_chars())
 */

function anagram(string $first, string $second) : bool
{
    if(strlen($first) != strlen($second)){
        return false;
    }

    return sortString(strtolower($first)) == sortString(strtolower($second));
}

function sortString($string)  : string 
{
    $stringParts = str_split($string);
    sort($stringParts);
    return implode('', $stringParts);
}

var_dump(anagram('abc', 'cab'));
var_dump(anagram('abc', 'abcc'));
var_dump(anagram('aBc', 'Cab'));
var_dump(anagram('abcde', 'efABC'));
