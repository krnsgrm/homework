<?php

// Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
// Where weight is measured in pounds and height is measured in inches.
// Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
// If the BMI is less than 18.5, the person is considered underweight.
// If the BMI value is greater than 25, the person is considered overweight.
//Your program must accept metric units.

$weight = (int)readline("how much do you weigh in kg? ");
$height = (int)readline("How tall are you in cm? ");

function BMI($weight, $height)
{
    $weightlb = $weight * 2.2046;
    $heightin = $height * 0.39370;
    $BMI = ($weightlb * 703) / ($heightin ** 2);

    if ($BMI >= 18.5 && $BMI <= 25) {
        echo "your weight is optimal" . PHP_EOL;
    } elseif ($BMI < 18.5) {
        echo "you are underweight" . PHP_EOL;
    } else {
        echo "you are overweight" . PHP_EOL;
    }
}

BMI($weight, $height);