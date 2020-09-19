<?php

//Exercise 3

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

//todo check if an array contains a value user entered

$guess = (int)readline("Enter the value to search for: ");
if (in_array($guess, $numbers)) {
    echo "the number is in the array" . PHP_EOL;
} else {
    echo "the number is not in the array" . PHP_EOL;
}
