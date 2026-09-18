<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<html>";
    echo "   <body>";
    echo "      <form action='accion.php' method='Get' name='ejercicio02'>";
    echo "         Valor de la tabla: <input type'number' name='tabla' min=1 max=10><br>";
    echo "         Edad: <input type'number' name='edad' min=1 max=99><br>";
    echo "         Genero: <input type'text' name='sexo' maxlength='1' size='4'><br>";
    echo "         <input type='submit' name='opciones' value='Figuras'>";
    echo "         <input type='submit' name='opciones' value='Calcular Tabla'>";
    echo "         <input type='submit' name='opciones' value='Edades'>";
    echo "      </form>";
    echo "   </body>";
    echo "</html>";
    ?>
</body>
</html>