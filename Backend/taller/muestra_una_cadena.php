<!DOCTYPE html>
<html>
<head>
    <title>Scrip en php para mostrar una cadena de texto</title>
</head>
<body>

<?php
// Definir constante con el mensaje
$cadena = "Hola Mundo taller 6 Back End";

// Descomponer la cadena en un array de caracteres
$caracteres = str_split($cadena);

// Mostrar cada uno de los caracteres en pantalla
foreach ($caracteres as $caracter) {
    echo $caracter . " ";
}
?>

</body>
</html
