<?php
$nombre = $_GET["name"];
$edad = $_GET["edad"];
$telefono = $_GET["telefono"];

echo "<center>";
echo "<h1>Hola Saludos a" + $nombre;
echo "Estos son tus datos";
echo "<br>";
echo "<br>";
echo "Edad:" + $edad;
echo "<br>";
echo "Telefono:" + $telefono;
echo "<br>";
echo "<hr>";
echo "<a href='./html/greetingForm.html'>Regresar</a>";
?>