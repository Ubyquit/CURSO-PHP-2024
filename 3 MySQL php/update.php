<?php

include("connection.php");

// Supongamos que tenemos el valor nuevo para el campo email y el ID del usuario a actualizar
$sql = "UPDATE usuarios SET email = ? WHERE id_usuario = ?";

// Preparar la sentencia
$conn->prepare($sql);

// Asociar los valores a los parámetros de la sentencia
$stmt->bind_param("si", $nuevoEmail, $idUsuario);

// Asignar valores a las variables
$nuevoEmail = "juanperez2@example.com";
$idUsuario = 3;

// Ejecutar la sentencia preparada
$stmt->execute();