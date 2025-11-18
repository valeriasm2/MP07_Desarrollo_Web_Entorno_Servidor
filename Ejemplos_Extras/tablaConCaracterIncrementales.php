<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Tabla de Caracteres ASCII</title>
<style>
table{border-collapse:collapse;margin:20px auto;}
td{border:1px solid black;padding:6px;text-align:center;}
tr:nth-child(odd){background:#ddd;}
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
        for ($c = 0; $c <= $col; $c++) {
            echo chr(65 + $row + $c);
            if ($c < $col) echo ",";
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
