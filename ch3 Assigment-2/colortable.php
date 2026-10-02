<?php
// Two-dimensional associative array (colors)
$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue")
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Colors Table</title>
</head>
<body>
<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>
    <?php
    foreach ($colors as $rowName => $columns) {
        echo "<tr>";
        echo "<th>$rowName</th>";
        foreach ($columns as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>