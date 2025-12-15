<?php
$students = [
    ["name" => "Alice", "id" => "001", "cgpa" => 3.5],
    ["name" => "Bob",   "id" => "002", "cgpa" => 3.9],
    ["name" => "Charlie", "id" => "003", "cgpa" => 3.7]
];

$highestCgpa = 0;
$topStudentName = "";

foreach ($students as $student) {
    if ($student['cgpa'] > $highestCgpa) {
        $highestCgpa = $student['cgpa'];
        $topStudentName = $student['name'];
    }
}

echo "The student with the highest CGPA is: " . $topStudentName . " (CGPA: " . $highestCgpa . ")";
?>
