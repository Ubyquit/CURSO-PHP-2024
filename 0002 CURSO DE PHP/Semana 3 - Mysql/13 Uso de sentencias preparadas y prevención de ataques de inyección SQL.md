Es importante utilizar sentencias preparadas para prevenir los ataques de inyección SQL y garantizar la seguridad de tus consultas. Aquí tienes información sobre cómo utilizar sentencias preparadas en el contexto de las consultas que hemos estado realizando en la tabla de usuarios:

Tipo de ataque:

```sql
-- SQLInjection

' or 1=1 -- 

-- tautología

1 = 1
```

1. Uso de sentencias preparadas en consultas INSERT:

```php
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
```

En este ejemplo, utilizamos una sentencia preparada con marcadores de posición (`?`) en la consulta INSERT. Luego, usamos el método `bind_param()` para asociar los valores de las variables a los parámetros de la sentencia.

Ejemplos de tipo de datos en marcadores bind_param
![[D68AD7A1-49E5-4B0E-8657-E295F6A71B5F.png]]

2. Uso de sentencias preparadas en consultas UPDATE:

```php
// Supongamos que tenemos el valor nuevo para el campo email y el ID del usuario a actualizar
$sql = "UPDATE usuarios SET email = ? WHERE id_usuarios = ?";

// Preparar la sentencia
$stmt = $conn->prepare($sql);

// Asociar los valores a los parámetros de la sentencia
$stmt->bind_param("si", $nuevoEmail, $idUsuario);

// Asignar valores a las variables
$nuevoEmail = "juanperez@example.com";
$idUsuario = 1;

// Ejecutar la sentencia preparada
$stmt->execute();
```

En este ejemplo, utilizamos una sentencia preparada para actualizar el campo "email" de un usuario específico. Los valores se asocian a los parámetros de la sentencia mediante el método `bind_param()`.

3. Uso de sentencias preparadas en consultas SELECT:

```php
// Supongamos que queremos obtener información del usuario según su ID
$sql = "SELECT * FROM usuarios WHERE id_usuarios = ?";

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
echo "Nombre: " . $usuario['nombre'];
echo "Apellido: " . $usuario['apellido'];
// ...
```

En este ejemplo, utilizamos una sentencia preparada para obtener información de un usuario según su ID. Los resultados se obtienen mediante el método `get_result()` y luego se accede a los datos del usuario.

Al utilizar sentencias preparadas, los valores se pasan de manera segura a través de los parámetros, evitando la posibilidad de inyección SQL.