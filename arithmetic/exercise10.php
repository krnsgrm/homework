<?php

// Design a Geometry class with the following methods:
//
//    A static method that accepts the radius of a circle and returns the area of the circle.
// Use the following formula:
//        Area = π * r * 2
//        Use Math.PI for π and r for the radius of the circle
//    A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
// Use the following formula:
//        Area = Length x Width
//    A static method that accepts the length of a triangle’s base and the triangle’s height. The method should return the area of the triangle.
// Use the following formula:
//        Area = Base x Height x 0.5
//
//The methods should display an error message if negative values are used for the circle’s radius, the rectangle’s length or width,
// or the triangle’s base or height.
// Display an error message if the user enters a number outside the range of 1 through 4 when selecting an item from the menu.

class Geometry
{
    private int $radius;
    private int $length;
    private int $width;
    private int $base;
    private int $height;
    private int $area;

    public function __construct(int $radius, int $length, int $width, int $base, int $height, int $area)
    {
        $this->radius = $radius;
        $this->length = $length;
        $this->width = $width;
        $this->base = $base;
        $this->height = $height;
        $this->area = $area;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getBase(): int
    {
        return $this->base;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getArea(): int
    {
        return $this->area;
    }

    public static function circle()
    {
        if ($this->radius < 0) {
            echo "you cannot use negative values";
        } else {
            return $this->area = pi() * $this->radius * 2;
        }
    }

    public static function rectangle()
    {
        if ($this->length < 0 || $this->width < 0) {
            echo "you cannot use negative values";
        } else {
            return $this->area = $this->length * $this->width;
        }
    }

    public static function triangle()
    {
        if ($this->base < 0 || $this->height) {
            echo "you cannot use negative values";
        } else {
            return $this->area = $this->base * $this->height * 0.5;
        }
    }
}
