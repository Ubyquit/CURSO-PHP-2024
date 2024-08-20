
Vamos a crear una tabla básica en MySQL para almacenar datos de usuarios. Utilizaremos el formato "id_nombre_tabla" para el identificador único de cada registro en la tabla.

## ESTRUCTURA DE UNA TABLA EN BASE DE DATOS:

id:  identificador del registro no se puede repetir.
columnas o campos: vertical y son el nombre que clasifica cada columna.
fila o registro: horizontal y son los datos relacionados.

1. Creación de la tabla "usuarios":

```sql
CREATE TABLE usuarios (
  id_usuarios INT AUTO_INCREMENT,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  email VARCHAR(100),
  fecha_nacimiento DATE,
  PRIMARY KEY (id_usuarios)
);
```

En esta consulta, creamos una tabla llamada "usuarios" con columnas para el identificador (`id_usuarios`), nombre, apellido, email y fecha de nacimiento. El identificador tiene el formato "id_nombre_tabla" y se define como una clave primaria con la opción `AUTO_INCREMENT`.

2. Inserción de datos en la tabla "usuarios":

```sql
INSERT INTO usuarios (nombre, apellido, email, fecha_nacimiento) 
VALUES ('Juan', 'Pérez', 'juan@example.com', '1990-05-15');

```

En esta consulta, insertamos un nuevo registro en la tabla "usuarios" con los valores proporcionados.

3. Consulta SELECT para recuperar datos de la tabla "usuarios":

```sql
SELECT * FROM usuarios;
```

Esta consulta recupera todos los registros de la tabla "usuarios" y muestra todas las columnas.

4. Consulta UPDATE para actualizar un registro en la tabla "usuarios":

```sql
UPDATE usuarios
SET email = 'juanperez@example.com'
WHERE id_usuarios = 1;
```

En esta consulta, actualizamos el valor del campo "email" para el registro con `id_usuarios = 1`.

5. Consulta DELETE para eliminar un registro en la tabla "usuarios":

```sql
DELETE FROM usuarios
WHERE id_usuarios = 1;
```

En esta consulta, eliminamos el registro con `id_usuarios = 1` de la tabla "usuarios".

Recuerda que estos son ejemplos básicos de consultas SQL para operar en la tabla de usuarios. Puedes adaptar y expandir estas consultas según tus necesidades y estructura de la base de datos.