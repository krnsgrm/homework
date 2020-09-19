<?php

//          Exercise 2

$i = (int)readline("Input number of terms: ") . PHP_EOL;

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function

$n = 3;

for ($j = 0; $j < $n; $j++) {
    $i *= $i;
}

echo "number is: " . $i . PHP_EOL;
