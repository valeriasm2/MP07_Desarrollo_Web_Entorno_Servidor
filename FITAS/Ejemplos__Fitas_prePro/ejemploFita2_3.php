<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            background-color: #f0f0f0;
            flex-direction: column;
        }
        h1 {
            font-family: Arial, sans-serif;
            color: #333;
        }
    </style>
</head>
<body>

<!-- nos muetsra la opcion seleccionada en el desplegable de la pagiina anterior ejemploFita2_2.php-->
    <?php
    if (isset($_GET['opcion'])) {
        $opcion = $_GET['opcion']; // Obtiene la opción seleccionada
        echo "<h1>Opción seleccionada: $opcion</h1>";
    }
    ?>
</body>
</html>