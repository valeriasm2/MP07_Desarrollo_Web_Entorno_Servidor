<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Series Descendentes</title>
    <style>
        table { border-collapse: collapse; margin: 30px auto; }
        td, th { border: 1px solid black; padding: 8px 10px; text-align: center; }
        tr:nth-child(even) { background-color: #f1f1f1; }
    </style>
</head>
<body>

<?php
$M = 6;
$N = 5;
?>

<table>
<?php
for ($row = 0; $row < $N; $row++) {
    echo "<tr>";
    for ($col = 0; $col <= $M; $col++) {
        echo "<td>";
        for ($k = $col; $k >= 0; $k--) {
            echo $k;
            if ($k > 0) echo "-";
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
