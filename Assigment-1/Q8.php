<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <table border="1" cellpadding="1" cellspacing="0" align="left">
        <caption>Multiplication Table</caption>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 12; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>