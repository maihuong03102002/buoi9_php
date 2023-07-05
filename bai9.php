<?php
class Product {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function displayInfo()
    {
        echo "Name: " . $this->name . "<br>"
        . "Price: " . $this->price . "<br>"
        . "Description: " . $this->description;
    }
}
$name = ("Socola");
$price = 15.000;
$description = ("Dark chocolate 90%");
$product = new Product($name, $price, $description);
echo "Product information is: <br>";
echo $product ->displayInfo();