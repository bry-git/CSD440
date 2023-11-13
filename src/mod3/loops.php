<?php

/*
 * this is a multiline comment similar to Java/JS but minus one asterisk
 */

/*
 * PHP has keywords `for`, `foreach`, `while`, and `do` to do low level iteration over
 * array like structures. this is pretty similar to Java/JS as well
 */

/*
 * this is an example of a for (<condition>) that takes a typical:
 * <initializer; condition returning true; do after each loop> type of pattern
 * this is great but you also run into a possibility of checking an index of an array
 * that is out of bounds. Here we can use the internal or builtin `sizeof()` function to
 * check the size of an array
 */
$nums = [1, 2, 3];
for ($i = 0; $i < sizeof($nums); $i++) {
    print($nums[$i]);
}

/*
 * this is nice because we can just iterate over each item without tracking any external
 * state like in the above and not possibly call an index that is out of bounds
 */
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    print($color);
}

/*
 * while (condition) is same as Java/JS and is used to check a condition *before the execution
 * or iteration
 */
$j = 0;
while ($j < 5) {
    print($j);
    $j++;
}

/*
 * the do while loop is good for keeping a combined condition to check at the
 * end of the execution of one iteration in the body but works the same way otherwise
 */
$k = 0;
do {
    $k++;
} while ($k < 5);

