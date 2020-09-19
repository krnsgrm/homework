<?php

// Write a program that reads an positive integer and count the number of digits the number has.

$number = (int)readline("Enter a positive integer: ");

if ($number > 0) {
    echo "The string length is: " . strlen($number) . " digits" . PHP_EOL;
} else {
    echo "the number is not positive" . PHP_EOL;
}