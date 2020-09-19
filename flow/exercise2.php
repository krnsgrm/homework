<?php

//Exercise 2

//todo print if number is positive or negative

$number = (int)readline("Enter a number: ");

if ($number > 0) {
    echo "the number is positive" . PHP_EOL;
} elseif ($number < 0) {
    echo "the number is negative" . PHP_EOL;
} else {
    echo "the number is 0" . PHP_EOL;
}
