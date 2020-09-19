<?php

// Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise.
// The program shall always print “bye!” before exiting.

$number = (int)readline('ievadi skaitli: ');

if ($number % 2 == 0) {
    echo "the number $number is even" . PHP_EOL;
} else {
    echo "the number $number is odd" . PHP_EOL;
}

echo 'bye!' . PHP_EOL;
