<?php
class Person {
    private $name;
    private $age;
    private $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    public function displayInfo() {
        return "Name: " . $this->name . "<br>"
        . "Age: " . $this->age . "<br>"
        . "Address: " . $this->address;
    }
}
$name = ("Nguyen Van A");
$age = 22;
$address = ("123 Ha Noi");
$person = new Person($name, $age, $address);
echo "Information is: <br>";
echo $person->displayInfo();