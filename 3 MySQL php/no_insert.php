<?php

include("connection.php");

// Asignar valores a las variables
$nombre = "Juan";
$apellido = "Pérez";
$email = "juan@example.com";
$fechaNacimiento = "1990-05-15";

$sql = "INSERT INTO usuarios (nombre, apellido, email, fecha_nacimiento) 
VALUES ('$nombre', '$apellido', '$email', '$fechaNacimiento')";

$conn->query($sql);
