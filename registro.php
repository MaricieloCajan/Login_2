<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
echo "<center><h1> Sus datos fueron registrados</h1></center>";

echo "<p> El nombre del Usuario es: $nombre </p>";
echo "<p> El Apellido del Usuario es: $apellido </p>";
echo "<p> El correo del Usuario es: $correo </p>";
echo "<p> Mensaje:</p>";
echo "<p>$mensaje</p>";
?>