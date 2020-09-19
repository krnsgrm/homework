<?php

// Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

function factorial($x)
{
    if ($x < 1) {
        return 1;
    } else {
        return $x * factorial($x - 1);
    }
}

$number = 6;
$fact = factorial($number);
echo "The factorial of $number is: $fact" . PHP_EOL;