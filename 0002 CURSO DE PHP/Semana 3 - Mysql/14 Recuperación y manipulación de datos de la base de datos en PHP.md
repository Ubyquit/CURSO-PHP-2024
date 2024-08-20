
Después de establecer una conexión exitosa con la base de datos MySQL y ejecutar consultas SQL, necesitamos recuperar y manipular los datos obtenidos en PHP.

1. Recuperación de datos con consultas SELECT:

Una vez que se ha ejecutado una consulta SELECT, podemos recuperar los datos obtenidos utilizando métodos como `fetch_assoc()`, `fetch_array()`, `fetch_object()` o `fetch()` según la extensión que estés utilizando (MySQLi o PDO). Estos métodos nos permiten acceder a los datos de cada fila devuelta por la consulta.

```php
// Suponiendo que hemos ejecutado una consulta SELECT y almacenado el resultado en $resultado
while ($fila = $resultado->fetch_assoc()) {
    echo $fila['nombre'];
    echo $fila['apellido'];
    // ...
}
```

En este ejemplo, utilizamos un bucle `while` para recorrer cada fila del resultado de la consulta. La variable `$fila` se actualiza en cada iteración y podemos acceder a los valores de cada columna utilizando los nombres de las columnas.

2. Manipulación de datos en PHP:

Una vez que hemos recuperado los datos de la base de datos, podemos manipularlos según nuestras necesidades. Esto puede incluir operaciones como filtrado, ordenamiento, agrupación o cálculos adicionales utilizando las funciones y operadores proporcionados por PHP.

```php
// Suponiendo que hemos recuperado el resultado de una consulta SELECT y almacenado en $resultado
while ($fila = $resultado->fetch_assoc()) {
    // Realizar operaciones con los datos
    $nombreCompleto = $fila['nombre'] . ' ' . $fila['apellido'];
    $fechaNacimiento = strtotime($fila['fecha_nacimiento']);
    $edad = date('Y') - date('Y', $fechaNacimiento);
    
    // Imprimir los resultados
    echo "Nombre completo: " . $nombreCompleto;
    echo "Edad: " . $edad;
}
```

En este ejemplo, utilizamos los datos recuperados de la consulta SELECT para realizar algunas operaciones adicionales. Concatenamos el nombre y apellido para obtener el nombre completo, y calculamos la edad basándonos en la fecha de nacimiento.

Una vez que hayas finalizado la manipulación de los datos, es importante liberar los recursos utilizando los métodos `free()` (MySQLi) o `closeCursor()` (PDO) en el resultado de la consulta.

Con la recuperación y manipulación de datos en PHP, puedes procesar y presentar la información obtenida de la base de datos de acuerdo con los requisitos de tu aplicación o sitio web.