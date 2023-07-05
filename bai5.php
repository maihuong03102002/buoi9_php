<?php
class Student {
    private $studentId;
    private $fullName;

    public function __construct($studentId, $fullName) {
        $this->studentId = $studentId;
        $this->fullName = $fullName;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function getFullName() {
        return $this->fullName;
    }
}
class studentList {
    private $List;

    public function __construct() {
        $this->List = array();
    }

    public function addStudent($student) {
        $this->List[] = $student;
    }

    public function displayList() {
        foreach ($this->List as $student) {
            echo "Mã số: " . $student->getStudentId() . ", Họ và tên: " . $student->getFullName() . "<br />";
        }
    }
}
// Tạo đối tượng danh sách sinh viên
$studentList = new studentList();

// Thêm sinh viên mới
$student1 = new student("SV001", "Nguyễn Thị A");
$studentList->addStudent($student1);

$student2 = new student("SV002", "Trần Thị B");
$studentList->addStudent($student2);

$student3 = new student("SV003", "Lê Văn C");
$studentList->addStudent($student3);

// Hiển thị danh sách sinh viên
$studentList->displayList();