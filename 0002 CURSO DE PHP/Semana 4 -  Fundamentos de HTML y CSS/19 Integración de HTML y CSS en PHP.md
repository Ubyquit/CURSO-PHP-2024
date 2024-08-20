Cómo combinar HTML, CSS y PHP para crear páginas web dinámicas y personalizadas. Exploraremos cómo utilizar PHP para generar contenido de manera dinámica y cómo integrar estilos CSS en nuestras páginas PHP. También abordaremos conceptos clave relacionados con la comunicación entre PHP, HTML y CSS.

### Contenido del tema:

1. Introducción a PHP en páginas HTML:
   - Podemos incorporar código PHP dentro de documentos HTML utilizando las etiquetas `<?php ?>`.
   - Ejemplo de incorporación de código PHP en un documento HTML:
   ```html
   <!DOCTYPE html>
   <html>
   <head>
       <title>Página con PHP</title>
   </head>
   <body>
       <h1>Bienvenido, <?php echo "Usuario"; ?>!</h1>
   </body>
   </html>
   ```

2. Generación de contenido dinámico con PHP:
   - Utilizamos estructuras de control en PHP (if, for, while, etc.) para crear contenido dinámico basado en condiciones.
   - Ejemplo de generación de contenido dinámico con un condicional en PHP:
   ```html
   <!DOCTYPE html>
   <html>
   <head>
       <title>Página dinámica con PHP</title>
   </head>
   <body>
       <?php
       $edad = 30;
       if ($edad >= 18) {
           echo "<p>Eres mayor de edad.</p>";
       } else {
           echo "<p>Eres menor de edad.</p>";
       }
       ?>
   </body>
   </html>
   ```

3. Integración de estilos CSS en páginas PHP:
   - Podemos aplicar estilos directamente en línea utilizando la etiqueta `<style>` o enlazando a archivos CSS externos.
   - Ejemplo de integración de estilos CSS en línea:
   ```html
   <!DOCTYPE html>
   <html>
   <head>
       <title>Página con estilos en línea</title>
       <style>
           h1 {
               color: blue;
           }
       </style>
   </head>
   <body>
       <h1>Título con estilo en línea</h1>
   </body>
   </html>
   ```

4. Separación de la lógica de presentación:
   - Es beneficioso mantener la separación de la lógica de negocio (PHP) y la presentación (HTML/CSS) para mejorar la mantenibilidad y organización del código.
   - Ejemplo de una página PHP bien organizada con la separación de la lógica y la presentación:
   ```php
   <?php
   // Lógica de negocio y procesamiento de datos
   $nombre = obtener_nombre_usuario();
   ?>

   <!DOCTYPE html>
   <html>
   <head>
       <title>Página bien organizada</title>
   </head>
   <body>
       <h1>Bienvenido, <?php echo $nombre; ?>!</h1>
   </body>
   </html>
   ```

5. Comunicación entre PHP y CSS:
   - Podemos utilizar variables y constantes PHP en archivos CSS para crear estilos dinámicos.
   - Ejemplo de uso de variables PHP en un archivo CSS:
   ```css
   <?php
   $color_fondo = "#f0f0f0";
   $color_fuente = "#333333";
   ?>

   <!DOCTYPE html>
   <html>
   <head>
       <title>Página con estilos dinámicos</title>
       <style>
           body {
               background-color: <?php echo $color_fondo; ?>;
               color: <?php echo $color_fuente; ?>;
           }
       </style>
   </head>
   <body>
       <h1>Título con estilos dinámicos</h1>
   </body>
   </html>
   ```

6. Creación de plantillas PHP reutilizables:
   - Podemos generar plantillas para páginas web con contenido dinámico y reutilizarlas para mejorar la eficiencia del desarrollo.
   - Ejemplo de plantilla PHP reutilizable:
   ```php
   <!DOCTYPE html>
   <html>
   <head>
       <title><?php echo $titulo; ?></title>
   </head>
   <body>
       <?php echo $contenido; ?>
   </body>
   </html>
   ```