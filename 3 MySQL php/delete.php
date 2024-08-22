<?php

include("connection.php");

// Supongamos que queremos obtener información del usuario según su ID
$sql = "DELETE FROM usuarios WHERE id_usuario = ?";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Asociar el valor a los parámetros de la sentencia
$stmt->bind_param("i", $idUsuario);

// Asignar valor a la variable
$idUsuario = 3;

// Ejecutar la sentencia preparada
$stmt->execute();