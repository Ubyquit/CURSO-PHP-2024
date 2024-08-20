Exploraremos las etiquetas más utilizadas en HTML y aprenderemos sobre los atributos que se pueden aplicar a estas etiquetas para mejorar la estructura y el contenido de nuestras páginas web. A través de ejemplos prácticos, entenderemos cómo utilizar estas etiquetas y atributos para crear contenido más enriquecido y accesible.

### Contenido del tema:

1. Etiquetas de texto y estructura:
   - Las etiquetas `<h1>`, `<h2>`, ..., `<h6>` se utilizan para definir títulos de diferentes niveles. Los títulos proporcionan una estructura jerárquica al contenido y son importantes para el SEO y la accesibilidad.

   - La etiqueta `<p>` se utiliza para definir párrafos de texto en la página. Agrupa el contenido de texto en bloques coherentes.

   - Las etiquetas de línea `<br>` y `<hr>` se utilizan para crear saltos de línea y líneas horizontales, respectivamente.

   Ejemplo de títulos y párrafos:
   ```html
   <h1>Título de nivel 1</h1>
   <p>Este es un párrafo de texto.</p>

   <h2>Título de nivel 2</h2>
   <p>Otro párrafo de texto.</p>
   ```

   Ejemplo de etiquetas de línea y línea horizontal:
   ```html
   <p>Este es un párrafo.<br>Y aquí hay otro párrafo.</p>
   <hr>
   ```

2. Etiquetas para listas y tablas:
   - Las etiquetas `<ul>` y `<ol>` se utilizan para crear listas desordenadas y ordenadas, respectivamente. Cada elemento de la lista se define con la etiqueta `<li>`.

   - Para definir listas de términos y su definición, se utilizan las etiquetas `<dl>` (lista de definición), `<dt>` (término de definición) y `<dd>` (definición).

   - Las etiquetas `<table>`, `<tr>`, `<th>` y `<td>` se utilizan para crear tablas. `<table>` define la tabla, `<tr>` define una fila, `<th>` define una celda de encabezado y `<td>` define una celda de datos.

   Ejemplo de listas y tablas:
   ```html
   <ul>
       <li>Elemento 1</li>
       <li>Elemento 2</li>
       <li>Elemento 3</li>
   </ul>

   <ol>
       <li>Primer elemento</li>
       <li>Segundo elemento</li>
       <li>Tercer elemento</li>
   </ol>

   <dl>
       <dt>Término 1</dt>
       <dd>Definición del término 1</dd>
       <dt>Término 2</dt>
       <dd>Definición del término 2</dd>
   </dl>

   <table>
       <tr>
           <th>Nombre</th>
           <th>Edad</th>
       </tr>
       <tr>
           <td>Juan</td>
           <td>30</td>
       </tr>
       <tr>
           <td>María</td>
           <td>25</td>
       </tr>
   </table>
   ```

3. Etiquetas para enlaces e imágenes (continuación):
   - La etiqueta `<a>` se utiliza para crear enlaces a otras páginas o recursos. El atributo `href` se utiliza para especificar la URL de destino del enlace.

   - El atributo `target` se utiliza con la etiqueta `<a>` para especificar cómo se abrirá el enlace (por ejemplo, en una nueva pestaña o en la misma ventana).

   - El atributo `alt` se utiliza con la etiqueta `<img>` para proporcionar texto alternativo a las imágenes. Esto es útil para la accesibilidad y para mostrar un texto descriptivo si la imagen no se carga correctamente.

   Ejemplo de enlaces e imágenes:
   ```html
   <a href="https://www.ejemplo.com">Enlace a Ejemplo</a>

   <a href="https://www.otro-ejemplo.com" target="_blank">Enlace en nueva pestaña</a>

   <img src="imagen.jpg" alt="Descripción de la imagen">
   ```

4. Etiquetas para formularios:
   - Las etiquetas `<form>`, `<input>`, `<select>`, `<textarea>` y `<button>` se utilizan para crear formularios interactivos que permiten a los usuarios enviar datos al servidor.

   - Los atributos `type`, `name` y `value` se utilizan con las etiquetas de formulario para controlar los elementos del formulario, como campos de entrada, botones y áreas de texto.

   Ejemplo de formulario con campos de entrada y botón de envío:
   ```html
   <form action="/procesar_formulario.php" method="POST">
       <label for="nombre">Nombre:</label>
       <input type="text" id="nombre" name="nombre" required>

       <label for="correo">Correo electrónico:</label>
       <input type="email" id="correo" name="correo" required>

       <textarea id="mensaje" name="mensaje" rows="4" cols="50" placeholder="Escribe tu mensaje aquí..."></textarea>

       <button type="submit">Enviar</button>
   </form>
   ```

5. Atributos globales de HTML:
   - Los atributos `class` e `id` se utilizan para aplicar estilos y manipular elementos con CSS y JavaScript.

   - El atributo `style` se utiliza para aplicar estilos directamente a elementos HTML utilizando reglas de estilo en línea.

   - El atributo `title` se utiliza para proporcionar información adicional sobre un elemento cuando se desplaza el cursor sobre él.

   Ejemplo de atributos globales:
   ```html
   <div class="mi-clase" id="mi-elemento" style="color: red;" title="Este es un elemento con estilo en línea.">Contenido del elemento</div>
   ```
