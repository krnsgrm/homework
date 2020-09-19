<?php

// Write a program to produce the sum of 1, 2, 3, ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average.

$min = 1;
$max = 100;
$sum = 0;

for ($x = $min; $x <= $max; $x++) {
    $sum += $x;
}

$average = $sum / (($max + 1) - $min);

echo "the sum of $min and  $max is $sum" . PHP_EOL;
echo "the average is $average" . PHP_EOL;