<?php
// HCF (GCD) of two integers
$a = 18; $b = 24;


$x = ($a < 0) ? -$a : $a;
$y = ($b < 0) ? -$b : $b;

if ($x == 0 && $y == 0) {
    echo "HCF is undefined when both numbers are 0";
} else {
    // Euclidean algorithm
    while ($y != 0) {
        $temp = $y;
        $y = $x % $y;
        $x = $temp;
    }
    echo "HCF of $a and $b = $x";
}

?>