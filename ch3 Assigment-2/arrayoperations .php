<?php
// One-dimensional array operations
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
$size = count($numbers);

// 2) Print all elements
echo "<h3>Array elements</h3>";
for ($i = 0; $i < $size; $i++) {
    echo "[$i] = " . $numbers[$i] . "<br>";
}

$total = 0;
$evenTotal = 0;
$oddTotal = 0;

for ($i = 0; $i < $size; $i++) {
    $total += $numbers[$i];
    if ($numbers[$i] % 2 == 0) {
        $evenTotal += $numbers[$i];
    } else {
        $oddTotal += $numbers[$i];
    }
}

echo "<h3>Totals</h3>";
echo "Total of all elements: $total<br>";
echo "Total of even elements: $evenTotal<br>";
echo "Total of odd elements: $oddTotal<br>";


$min = $numbers[0];
$max = $numbers[0];

for ($i = 1; $i < $size; $i++) {
    if ($numbers[$i] < $min) { $min = $numbers[$i]; }
    if ($numbers[$i] > $max) { $max = $numbers[$i]; }
}

$minPositions = "";
$maxPositions = "";

for ($i = 0; $i < $size; $i++) {
    if ($numbers[$i] == $min) { $minPositions .= $i . " "; }
    if ($numbers[$i] == $max) { $maxPositions .= $i . " "; }
}

echo "<h3>Minimum and Maximum</h3>";
echo "Minimum element: $min at position(s): $minPositions<br>";
echo "Maximum element: $max at position(s): $maxPositions<br>";

?>