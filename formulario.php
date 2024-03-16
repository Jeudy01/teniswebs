<?php
$conectar=mysqli_connect("localhost","root","","nike");

$n = $_POST["nombre"] ;
$e = $_POST["email"] ;
$m = $_POST["mensaje"] ;

mysqli_query ($connection,"INSERT INTO solicitud VALUES ('', '$n','$e', '$m')");

echo("solicitud enviada.")
?>