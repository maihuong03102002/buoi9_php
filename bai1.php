<?php
class Rectangle {
    protected $length;
    protected $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function calArea() {
        return $this->length * $this->width;
    }
    public function calPerimeter() {
        return ($this->length + $this->width) * 2;
    }
}

$length = 5;
$width = 3;
$rectangle = new Rectangle($length, $width);
echo "Bài 1: </br>";
echo "Area of rectangle: ". $rectangle->calArea(). "<br />";
echo "Perimeter of retangle: ". $rectangle->calPerimeter();
