<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tabla con Series</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 40px auto;
        }
        td {
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
            padding: 2px;
        }

    </style>
</head>
<body>

<?php
$M = 7; // número de columnas
$N = 6; // número de filas
?>

<table>
<?php
for ($row = 0; $row < $N; $row++) {
    echo "<tr>";

    // columnas normales
    for ($col = 0; $col < $M; $col++) {
        echo "<td><table><tr>";
        for ($k = $row; $k <= $row + $col; $k++) {
            echo "<td>$k</td>";
        }
        echo "</tr></table></td>";
    }

    // última columna con la serie completa
    echo "<td><table><tr>";
    for ($k = $row; $k <= $row + $M; $k++) {
        echo "<td>$k</td>";
    }
    echo "</tr></table></td>";

    echo "</tr>";
}
?>
</table>

</body>
</html>
