<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }

        td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
            min-width: 40px;
        }

        .header-row {
            background-color: #0066cc;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Fita 1</h1>

    <?php
    $M = 10;
    $N = 20;
    
    function getColumnLetter($num) {
        $letter = '';
        while ($num >= 0) {
            $letter = chr(97 + ($num % 26)) . $letter;
            $num = floor($num / 26) - 1;
        }
        return $letter;
    }
    ?>

    <table>
        <tr class="header-row">
            <?php
            for ($i = 0; $i < $M; $i++) {
                echo "<td>" . getColumnLetter($i) . "</td>";
            }
            ?>
        </tr>

        <?php
        for ($fila = 1; $fila <= $N; $fila++) {
            echo "<tr>";
            for ($col = 0; $col < $M; $col++) {
                $numero = $fila + $col;
                echo "<td>$numero</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>