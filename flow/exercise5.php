<?php

// On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//
// Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.
//
// Use:
//
//    a "nested-if" statement
//    a "switch-case-default" statement
//
// Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,

$letter = (string)readline("write a letter: ");

$letters = str_split($letter);

foreach ($letters as $strletter) {

    $upperstring = strtoupper($strletter);

    switch ($upperstring) {
        case "A":
        case "B":
        case "C":
            echo "2";
            break;
        case "D":
        case "E":
        case "F":
            echo "3";
            break;
        case "G":
        case "H":
        case "I":
            echo "4";
            break;
        case "J":
        case "K":
        case "L":
            echo "5";
            break;
        case "M":
        case "N":
        case "O":
            echo "6";
            break;
        case "P":
        case "Q":
        case "R":
        case "S":
            echo "7";
            break;
        case "T":
        case "U":
        case "V":
            echo "8";
            break;
        case "W":
        case "X":
        case "Y":
        case "Z":
            echo "9";
            break;
        default:
            echo "not valid";
    }

    if ($upperstring == "A" || $upperstring == "B" || $upperstring == "C") {
        echo 2;
    } elseif ($upperstring == "D" || $upperstring == "E" || $upperstring == "F") {
        echo 3;
    } elseif ($upperstring == "G" || $upperstring == "H" || $upperstring == "I") {
        echo 4;
    } elseif ($upperstring == "J" || $upperstring == "K" || $upperstring == "L") {
        echo 5;
    } elseif ($upperstring == "M" || $upperstring == "N" || $upperstring == "O") {
        echo 6;
    } elseif ($upperstring == "P" || $upperstring == "Q" || $upperstring == "R" || $upperstring == "S") {
        echo 7;
    } elseif ($upperstring == "T" || $upperstring == "U" || $upperstring == "V") {
        echo 8;
    } elseif ($upperstring == "W" || $upperstring == "X" || $upperstring == "Y" || $upperstring == "Z") {
        echo 9;
    } else "not valid" . PHP_EOL;

}
