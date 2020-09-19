<?php

// Write a program that picks a random number from 1-100.
// Give the user a chance to guess it. If they get it right, tell them so.
// If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

$number = rand(1, 100);
echo $number . PHP_EOL;
$guess = (int)readline("Guess a number from 1 to 100: ") . PHP_EOL;

if ($guess == $number) {
    echo "you did it! woohooo" . PHP_EOL;
} elseif ($guess > $number) {
    echo "too high, i was thinking of $number" . PHP_EOL;
} else {
    echo "too low, i was thinking of $number" . PHP_EOL;
}