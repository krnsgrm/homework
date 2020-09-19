<?php

// Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

$x = 10;
$y = 10;

if ($x === 15 || $y === 15 || $x + $y === 15 || $x - $y === 15) {
    echo 'True' . PHP_EOL;
} else {
    echo 'False' . PHP_EOL;
}

