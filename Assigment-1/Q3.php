<?php
// Odd numbers from 2 to 20
echo "<h3>Odd numbers from 2 to 20</h3>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

// Even numbers from 35 to 7
echo "<h3>Even numbers from 35 to 7</h3>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>