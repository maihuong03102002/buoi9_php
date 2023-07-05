<?php
class Fraction {
    private $numerator;
    private $denominator;
    
    public function __construct($numerator, $denominator)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
        
    }

    public function add($fr)
    {
        $resultNumerator = $this->numerator * $fr->denominator + $fr->numerator * $this->denominator;
        $resultDenominator = $this->denominator * $fr->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function subtract($fr)
    {
        $resultNumerator = $this->numerator * $fr->denominator - $fr->numerator * $this->denominator;
        $resultDenominator = $this->denominator * $fr->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function multiply($fr)
    {
        $resultNumerator = $this->numerator * $fr->numerator;
        $resultDenominator = $this->denominator * $fr->denominator;
        return new Fraction($resultNumerator, $resultDenominator);
    }

    public function divide($fr)
    {
        $resultNumerator = $this->numerator * $fr->denominator;
        $resultDenominator = $this->denominator * $fr->numerator;
        return new Fraction($resultNumerator, $resultDenominator);
    }
    public function displayFraction() {
        return $this->numerator . "/" . $this->denominator;
    }
}

// Tạo đối tượng phân số
$numerator1 = 1;
$denominator1 = 2;
$Fraction1 = new Fraction(1,2);
$numerator2 = 7;
$denominator2 = 8;
$Fraction2 = new Fraction(7,8);

// Thực hiện phép cộng
$add = $Fraction1->add($Fraction2);
echo "Add is: ". $add->displayFraction(). "<br>";

// Thực hiện phép trừ
$subtract = $Fraction1->subtract($Fraction2);
echo "Subtract is: ". $subtract->displayFraction(). "<br>";

// Thực hiện phép nhân
$multiply = $Fraction1->multiply($Fraction2);
echo "Multiply is: ". $multiply->displayFraction(). "<br>";

// Thực hiện phép chia
$divide = $Fraction1->divide($Fraction2);
echo "Divide is: ". $divide->displayFraction(). "<br>";
