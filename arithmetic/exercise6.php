<?php

// Write a program called coza-loza-woza.php which prints the numbers 1 to 110, 11 numbers per line.
// The program shall print "Coza" in place of the numbers which are multiples of 3, "Loza" for multiples of 5,
// "Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on.

$count = 0;
for ($number = 1; $number <= 110; $number++) {
    $count += 1;
    if ($number % 5 == 0 && $number % 7 == 0) {
        echo "LozaWoza ";
    } elseif ($number % 3 == 0 && $number % 5 == 0) {
        echo "CozaLoza ";
    } elseif ($number % 3 == 0 && $number % 7 == 0) {
        echo "CozaWoza ";
    } elseif ($number % 3 == 0) {
        echo "Coza ";
    } elseif ($number % 5 == 0) {
        echo "Loza ";
    } elseif ($number % 7 == 0) {
        echo "Woza ";
    } else {
        echo $number . " ";
    }
    if ($count == 11) {
        echo " " . PHP_EOL;
        $count = 0;
    }
}