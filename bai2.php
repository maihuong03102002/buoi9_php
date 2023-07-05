<?php
class point2D {
    private $x;
    private $y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
       
    }
    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function CalculateDistance($point)
    {
        $xPoint = $this->x - $point->getX();
        $yPoint = $this->y - $point->getY();
        $distance = sqrt($xPoint * $xPoint + $yPoint * $yPoint);
        return $distance;  

    }

}

// Tạo đối tượng điểm 1
$x1 = new point2D(3, 4);

// Tạo đối tượng điểm 2
$x2 = new point2D(6, 8);

// Tính khoảng cách từ điểm 1 đến điểm 2
$Distance = $x1->CalculateDistance($x2);

echo "Distance from point 1 to point 2 is: " . $Distance;