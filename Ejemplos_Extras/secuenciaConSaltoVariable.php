<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Series con Saltos</title>
<style>
table{border-collapse:collapse;margin:25px auto;}
td{border:1px solid #000;padding:6px;text-align:center;}
</style>
</head>
<body>

<?php
$M = 7;
$N = 6;
?>

<table>
<?php
for ($row = 0; $row < $N; $row++) {
    echo "<tr>";
    for ($col = 0; $col < $M; $col++) {
        echo "<td>";
        $limite = ($col + 1) * 2 + ($row * 3);
        for ($i = 0; $i <= $limite; $i += 2) {
            echo $i;
            if ($i < $limite) echo ",";
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
