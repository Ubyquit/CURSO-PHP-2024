## Conexión a la base de datos MySQL desde PHP

La conexión a una base de datos MySQL desde PHP es esencial para interactuar con la base de datos y realizar consultas, inserciones, actualizaciones y eliminaciones de datos. Aquí hay información clave sobre cómo establecer una conexión exitosa:

1. Extensión MySQLi (MySQL Improved) o PDO (PHP Data Objects):
   - PHP ofrece dos extensiones principales para conectarse a una base de datos MySQL: MySQLi y PDO.
   - MySQLi es una extensión específica de MySQL y proporciona una interfaz orientada a objetos y una interfaz procedural para conectarse y operar con la base de datos.
   - PDO es una capa de abstracción de base de datos en PHP que admite múltiples sistemas de gestión de bases de datos, incluyendo MySQL.

2. Parámetros de conexión:
   - Para conectarse a una base de datos MySQL, debes proporcionar los siguientes detalles:
     - Nombre del servidor (generalmente "localhost" si estás trabajando en tu propia máquina).
 ![[Captura de pantalla 2023-07-13 a la(s) 9.08.55 p.m..png]]
     - Nombre de usuario y contraseña de MySQL.
![[Captura de pantalla 2023-07-13 a la(s) 9.09.31 p.m..png]]
     - Nombre de la base de datos a la que deseas conectarte.
![[Captura de pantalla 2023-07-13 a la(s) 9.09.44 p.m..png]]
3. Establecer la conexión:
   - Utilizando MySQLi o PDO, puedes establecer la conexión con la base de datos MySQL utilizando la información mencionada anteriormente.

Aquí tienes un ejemplo de archivo de conexión a la base de datos MySQL utilizando la extensión MySQLi en PHP:

```php
<?php
// Detalles de conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "nombre_base_datos";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos MySQL";

// Cerrar la conexión al finalizar
$conn->close();
?>
```

En este ejemplo, se utilizan variables para almacenar los detalles de conexión, como el nombre del servidor, el nombre de usuario, la contraseña y el nombre de la base de datos. Luego, se crea una nueva instancia de la clase `mysqli` pasando los parámetros de conexión. Se verifica si la conexión se establece correctamente y se imprime un mensaje correspondiente.

Recuerda que debes reemplazar "usuario", "contraseña" y "nombre_base_datos" con los valores reales de tu entorno.