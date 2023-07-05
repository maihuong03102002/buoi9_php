<?php
class Car {
    private $brand;
    private $color;
    private $year;

    public function __construct($brand, $color, $year)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->year = $year;
    }

    public function displayInfo()
    {
        return "Brand: " . $this->brand . "<br>"
        . "Color: " . $this->color . "<br>"
        . "Year: " . $this->year;
    }
}

// Tạo đối tượng xe hơi
$brand = ("Toyota");
$color = ("Red");
$year = 2020;
$car = new Car($brand, $color, $year);
echo "Full vehicle information : <br>";
echo $car->displayInfo();