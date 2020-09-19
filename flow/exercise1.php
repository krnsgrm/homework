<?php

//Exercise 1

$guess1 = (int)readline("Input the 1st number: ");

$guess2 = (int)readline("Input the 2nd number: ");

$guess3 = (int)readline("Input the 3rd number: ");

//todo print the largest number

echo "The largest number is: " . max($guess1, $guess2, $guess3) . PHP_EOL;
