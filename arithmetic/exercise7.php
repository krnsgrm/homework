<?php

// Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters.
// Note: The correct value is -490.5m.

// x(t) = 0.5*at^2+vt+x

$a = -9.81;
$t = 10;
$v = 0;
$x = 0;


$gravity = 0.5 * ($a * $t ** 2) + $v * $t + $x;

echo $gravity . PHP_EOL;