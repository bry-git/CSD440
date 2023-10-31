<?php

function getSum(int $x, int $y): int {
    if (gettype($x) != "integer") {
        throw new Exception("$x must be an integer");
    }
    if (gettype($y) != "integer") {
        throw new Exception("$y must be an integer");
    }
    return $x + $y;
}