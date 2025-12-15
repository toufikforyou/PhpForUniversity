<?php
$marks = [80, 75, 90, 65, 88];

echo "<h3>Marks:</h3>";
foreach ($marks as $mark) {
    echo $mark . " ";
}
echo "<br>";

$sum = 0;
$count = count($marks);

for ($i = 0; $i < $count; $i++) {
    $sum += $marks[$i];
}

echo "<h3>Total Sum:</h3>";
echo "The total sum is: " . $sum;
?>
