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
        }

        form {
            text-align: center;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
            background-color: #abffdfff;
        }
        label {
            font-family: Arial, sans-serif;
            display: block;
            margin-bottom: 5px;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4542ffff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #455aa0ff;
        }
    </style>
</head>
<body>
    <!-- ejemploFita2_2.php aparece un menu despegable con las 5 opciones que se han enviado del form de ejemploFita2.php y se envia get a la siquiente pagina ejemploFita2_3.php -->
    <form action="ejemploFita2_3.php" method="get"> 
        <label for="opcion">Selecciona una opción:</label>
        <select id="opcion" name="opcion">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica que el formulario se ha enviado por POST
                // Recorre los campos del formulario y crea las opciones del desplegable
                for ($i = 1; $i <= 5; $i++) {
                    $campo = "campo" . $i; // Nombres de los campos: campo1, campo2, ..., campo5

                    if (!empty($_POST[$campo])) { // Verifica que el campo no esté vacío
                        $valor = htmlspecialchars($_POST[$campo]); // Escapa caracteres especiales para evitar XSS , y lo guarda en la variable $valor , que se usa para crear las opciones del desplegable
                        echo "<option value=\"$valor\">$valor</option>"; // Crea una opción en el desplegable , con el valor del campo del formulario
                    }
                }
            }
            ?>
        </select>
        <input type="submit" value="Enviar">
</body>
</html>