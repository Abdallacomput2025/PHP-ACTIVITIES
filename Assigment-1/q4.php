<?php
// Numbers divisible by 2 and 5 at the same time, from 50 to 2
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}
?>