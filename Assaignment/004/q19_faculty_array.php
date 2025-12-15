<?php
$faculty = [
    "name" => "Mohammad Alauddin",
    "designation" => "Assistant Professor and Coordinator",
    "email" => "md.alauddin@uttarauniversity.edu.bd"
];

echo "<h3>Using print_r():</h3>";
echo "<pre>";
print_r($faculty);
echo "</pre>";

echo "<h3>Using foreach loop:</h3>";
foreach ($faculty as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
?>
