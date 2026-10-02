<?php
// Two-dimensional associative array (students)
$students = array(
    "CA221" => array(
        "Name"    => "Mohamed Ahmed Ali",
        "Phone"   => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),
    "CA223" => array(
        "Name"    => "Ahmed Abdi Jama",
        "Phone"   => "0647223201",
        "Address" => "Taleex, Hodan"
    ),
    "CA222" => array(
        "Name"    => "Amina Nur Adan",
        "Phone"   => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Students Table</title>
</head>
<body>
<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th></th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
    </tr>
    <?php
    foreach ($students as $id => $info) {
        echo "<tr>";
        echo "<th>$id</th>";
        foreach ($info as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>