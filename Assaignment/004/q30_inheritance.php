<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "Hi, I am " . $this->name . " and I am " . $this->age . " years old.<br>";
    }
}

class Student extends Person {
    public $course;

    public function __construct($name, $age, $course) {
        parent::__construct($name, $age);
        $this->course = $course;
    }

    public function displayCourse() {
        echo "I am studying " . $this->course . ".<br>";
    }
}

$student1 = new Student("David", 22, "Computer Science");

$student1->introduce();
$student1->displayCourse();
?>
