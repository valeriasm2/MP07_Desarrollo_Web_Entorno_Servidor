<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Potencias en Tabla</title>
<style>
table{border-collapse:collapse;margin:30px auto;}
td{border:1px solid black;padding:8px;text-align:center;}
tr:nth-child(odd){background-color:#eef;}
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
    for ($col = 1; $col <= $M; $col++) {
        echo "<td>";
        for ($p = 1; $p <= 3; $p++) {
            echo pow($col, $p);
            if ($p < 3) echo ",";
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
