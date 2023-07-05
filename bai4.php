<?php
class Clock {
    private $hour;
    private $minute;
    private $second;

    public function __construct($hour, $minute, $second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }

    public function displayTime() {
        $formattedTime = sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
        return $formattedTime;
    }

    public function increaseSecond() {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->minute++;
            if ($this->minute >= 60) {
                $this->minute = 0;
                $this->hour++;
                if ($this->hour >= 24) {
                    $this->hour = 0;
                }
            }
        }
    }
}

// Tạo đối tượng đồng hồ
$hour = 10;
$minute = 5;
$second = 15;
$clock = new Clock($hour, $minute, $second);

// Hiển thị thời gian ban đầu
echo "Time is: ". $clock->displayTime() . "<br />";

// Tăng giây
$clock->increaseSecond();

// Hiển thị thời gian sau khi tăng giây
echo "Time after increase 1 second is: ". $clock->displayTime();
