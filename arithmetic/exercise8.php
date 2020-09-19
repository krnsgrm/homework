<?php

// Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half for any hours over 40 that they work in a single week.
// For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
// The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
// Foo Corp requires that an employee not work more than 60 hours in a week.


//      meginat ar klasem uztaisit so?/???////?

//$employees = [
//    7.50 => 35,
//    8.20 => 47,
//    10.00 => 73
//];
//
//var_dump($employees);
//
////$basepays = [7.50, 8.20, 10.00];
////$hours = [35, 47, 73];
//
////$pairs = array_combine($basepays, $hours);
////print_r($pairs);
//
////$x = 1;
////$overtime = $hour - 40;
//for ($x = 0; $x <= 3; $x++) {
//    foreach ($pairs as $pair) {
//        echo $pair . PHP_EOL;
//    }
//
//    foreach ($hours as $hour) {
//        echo $hour . PHP_EOL;
//    }
//
//    if ($hour <= 40 && $basepay > 8 && $hour < 60) {
//        echo $hour * $basepay . PHP_EOL;
//    } elseif ($hour > 40 && $basepay > 8 && $hour < 60) {
//        $overtime = $hour - 40;
//        echo ($basepay * 1.5 * $overtime) + ($hour * $basepay) . PHP_EOL;
//    } elseif ($basepay < 8 && $hours > 60) {
//        echo "error" . PHP_EOL;
//    }
//    // $x++;
//}


class Employee
{
    private float $basepay;
    private int $hours;


    public function __construct(float $basepay, int $hours)
    {
        $this->basepay = $basepay;
        $this->hours = $hours;

    }
    public function basepay(): float
    {
        return $this->basepay;
    }

    public function hours(): int
    {
        return $this->hours;
    }

    public function salary(): int
    {
        if ($this->hours <= 40 && $this->basepay > 8 && $this->hours < 60) {
            return $this->hours * $this->basepay . PHP_EOL;
        } elseif ($this->hours > 40 && $this->basepay > 8 && $this->hours < 60) {
            $overtime = $this->hours - 40;
            return ($this->basepay * 1.5 * $overtime) + ($this->hours * $this->basepay) . PHP_EOL;
        } elseif ($this->basepay < 8 && $this->hours > 60) {
            echo "error" . PHP_EOL;
        }
        return 0;
    }

}

$employees = [
new Employee(7.50, 30),
new Employee(8.20, 47),
new Employee(10.00, 73)
];

foreach ($employees as $employee) {
    echo Employee::salary();
}