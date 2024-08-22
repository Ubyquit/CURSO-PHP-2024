<?php

include("connection.php");

// Supongamos que queremos obtener información del usuario según su ID
$sql = "SELECT * FROM usuarios WHERE id_usuario = ?";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Asociar el valor a los parámetros de la sentencia
$stmt->bind_param("i", $idUsuario);

// Asignar valor a la variable
$idUsuario = 1;

// Ejecutar la sentencia preparada
$stmt->execute();

// Obtener los resultados
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();

// Acceder a los datos del usuario
echo "\n";
echo "Nombre: " . $usuario['nombre'] ."\n";
echo "Apellido: " . $usuario['apellido'] ."\n";
echo "Email: " . $usuario['email'] ."\n";
// ...