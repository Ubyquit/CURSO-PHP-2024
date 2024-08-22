<?php

include("connection.php");

// Asignar valor a la variable
$idUsuario = 1;

// Supongamos que queremos obtener información del usuario según su ID
$sql = "SELECT * FROM usuarios WHERE id_usuario = $idUsuario";

// Preparar la sentencia
$resultado = $conn->query($sql);

$fila = $resultado->fetch_assoc();

// Acceder a los datos del usuario
echo "\n";
echo "Nombre: " . $fila['nombre'] ."\n";
echo "Apellido: " . $fila['apellido'] ."\n";
echo "Email: " . $fila['email'] ."\n";
// ...