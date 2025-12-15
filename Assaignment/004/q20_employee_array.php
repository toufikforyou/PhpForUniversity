<?php
$employee = [
    "name" => "MH TOUFIK",
    "position" => "Software Engineer",
    "salary" => 50000
];

$employee["department"] = "IT";

echo "<h3>Employee Details:</h3>";
foreach ($employee as $key => $value) {
    echo "<strong>" . ucfirst($key) . ":</strong> " . $value . "<br>";
}
?>
