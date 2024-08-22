<?php

include("connection.php");

// Asignar valor a la variable
$idUsuario = 3;

// Supongamos que queremos obtener información del usuario según su ID
$sql = "DELETE FROM usuarios WHERE id_usuario = $idUsuario";

// Preparar la sentencia
$conn->query($sql);
