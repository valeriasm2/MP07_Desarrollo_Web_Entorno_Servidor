<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla Fibonacci</title>
<style>
table{border-collapse:collapse;margin:25px auto;}
td{border:1px solid #000;padding:6px;text-align:center;}
tr:nth-child(even){background:#f8f8f8;}
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
        $a = 0; 
        $b = 1;
        $terms = $col + 2;
        for ($t = 0; $t < $terms; $t++) {
            echo $a;
            if ($t < $terms - 1) echo ",";
            $sum = $a + $b;
            $a = $b;
            $b = $sum;
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
</body>
</html>
