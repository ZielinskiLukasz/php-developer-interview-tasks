<?php

/**
 * You would like to find the sentence containing the largest number of words in some given text.
 * The text is specified as a string S consisting of N characters: letters, spaces, dots, ? and !.
 *
 * For example, given S = "We test coders. Give us a try?", there are 3 sentences.
 */

function maxNumberOfWords(string $S) : int
{
	$sentences = preg_split('/[.?!]/', $S);

	$lengths = array_map(function($sentence) {
		// remove duplicated spaces
		$sentence = preg_replace('/\s+/', ' ', trim($sentence));

		return substr_count($sentence, ' ') + 1;
	}, $sentences);

	return max($lengths);
}

$subject = "Forget  CVs..Save time . x x"; 
echo maxNumberOfWords($subject) . PHP_EOL; // 2
