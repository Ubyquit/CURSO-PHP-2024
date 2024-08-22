<?php
// Detalles de conexión a la base de datos
$hostname = "mysql-opset.alwaysdata.net";
$username = "opset_php2024";
$password = "Holamundo2024";
$database = "opset_php2024";

// Crear la conexión
$conn = new mysqli($hostname, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL";
