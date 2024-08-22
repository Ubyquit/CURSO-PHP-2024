<?php

include("connection.php");

// Asignar valores a las variables
$nuevoEmail = "juanperez2@example.com";
$idUsuario = 3;

// Supongamos que tenemos el valor nuevo para el campo email y el ID del usuario a actualizar
$sql = "UPDATE usuarios SET email = $nuevoEmail WHERE id_usuario = $idUsuario";

// Preparar la sentencia
$conn->query($sql);