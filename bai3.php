<?php
class IntegerArray {
    private $number;

    public function __construct($number) {
        $this->number = $number;
    }

    public function calculateSum() {
        return array_sum($this->number);
    }

    public function calculateAverage() {
        $count = count($this->number);
        if($count === 0){
            return 0;
        }
        return $this->calculateSum() / $count;
    }

    public function findMax() {
        return max($this->number);
    }
}
$array = [1,2,3,4];
$integerArray = new IntegerArray($array);
echo "Total: ". $integerArray->calculateSum(). "<br />";
echo "Average: ". $integerArray->calculateAverage(). "<br />";
echo "Max: ". $integerArray->findMax();
