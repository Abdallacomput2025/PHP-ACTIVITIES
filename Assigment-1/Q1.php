<?php

$a = 25; $b = 8; $c = 17;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) { $greatest = $b; }
if ($c > $greatest) { $greatest = $c; }

if ($b < $smallest) { $smallest = $b; }
if ($c < $smallest) { $smallest = $c; }

echo "Numbers: $a, $b, $c<br>";
echo "Greatest: $greatest<br>";
echo "Smallest: $smallest<br>";

?>
