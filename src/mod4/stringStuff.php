<?php

$input = "Bellevue University is Good";
$output = str_replace("good", "Great", $input);
echo $output; // does not since case doesn't match

$input = "Bellevue University is Good";
$output = str_ireplace("good", "Great", $input);
echo $output; // replaces



$string = "Hello, World!";
$substring = "o";

if (str_contains($string, $substring)) {
    echo "The substring $substring is found in $string.";
} else {
    echo "The substring $substring is not found in $string.";
}