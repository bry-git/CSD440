<?php

/*
 * unclear if we want to check if the parameter string is a palindrome,
 * versus if a word is a palindrome so here are functions for each
 */

function testIsPalindrome(string $word): bool {
    if (gettype($word) != "string") {
        throw new Exception("{$word} must be of type string");
    }
    return (strrev($word) == $word);
}

function testIsPalindromeIgnoreCase(string $word): bool {
    if (gettype($word) != "string") {
        throw new Exception("{$word} must be of type string");
    }
    $lower = strtolower($word);
    return (strrev($lower) == $lower);
}