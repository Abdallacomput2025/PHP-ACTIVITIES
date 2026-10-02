<?php
// Reverse a number without strrev
$number = 12345;
$temp = $number;
$reverse = 0;

while ($temp > 0) {
    $digit = $temp % 10;             
    $reverse = $reverse * 10 + $digit; 
    $temp = (int)($temp / 10);        
}

echo "Original number: $number<br>";
echo "Reversed number: $reverse";

?>