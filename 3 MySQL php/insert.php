<?php

include("connection.php");

// Supongamos que tenemos los valores para los campos nombre, apellido, email y fecha_nacimiento
$sql = "INSERT INTO usuarios (nombre, apellido, email, fecha_nacimiento) VALUES (?, ?, ?, ?)";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Asociar los valores a los parámetros de la sentencia
$stmt->bind_param("ssss", $nombre, $apellido, $email, $fechaNacimiento);

// Asignar valores a las variables
$nombre = "Juan";
$apellido = "Pérez";
$email = "juan@example.com";
$fechaNacimiento = "1990-05-15";

// Ejecutar la sentencia preparada
$stmt->execute();
