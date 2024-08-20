HTML (HyperText Markup Language) es el lenguaje de marcado estándar utilizado para crear y estructurar el contenido de páginas web. En este tema, exploraremos los conceptos básicos de HTML y aprenderemos cómo utilizar sus etiquetas para organizar el contenido de nuestras páginas.

### Contenido del tema:

1. ¿Qué es HTML?
   HTML es un lenguaje de marcado que permite definir la estructura y el contenido de una página web. Es la base fundamental para la creación de sitios web y se complementa con otros lenguajes como CSS y JavaScript para añadir estilos y funcionalidades.

2. Estructura básica de un documento HTML:
   Todo documento HTML debe tener una estructura básica que incluye las etiquetas `<html>`, `<head>` y `<body>`. La etiqueta `<html>` indica el inicio del documento HTML, la etiqueta `<head>` contiene información del documento, y la etiqueta `<body>` engloba el contenido visible en la página.

   Ejemplo de estructura básica de un documento HTML:
   ```html
   <!DOCTYPE html>
   <html>
   <head>
       <!-- Metadatos, títulos, enlaces a archivos CSS, etc. -->
       <title>Título de la página</title>
   </head>
   <body>
       <!-- Contenido visible en la página -->
       <h1>Título principal</h1>
       <p>Este es un párrafo de ejemplo.</p>
   </body>
   </html>
   ```

3. Etiquetas para títulos y párrafos:
   - Las etiquetas `<h1>` hasta `<h6>` se utilizan para definir títulos de diferentes niveles, siendo `<h1>` el título más importante y `<h6>` el menos importante. Estas etiquetas proporcionan una estructura jerárquica al contenido.

   - La etiqueta `<p>` se utiliza para definir párrafos de texto en la página.

   Ejemplo de títulos y párrafos:
   ```html
   <h1>Título de nivel 1</h1>
   <p>Este es un párrafo de texto.</p>

   <h2>Título de nivel 2</h2>
   <p>Otro párrafo de texto.</p>
   ```

4. Etiquetas para listas:
   - Las etiquetas `<ul>` (lista sin ordenar) y `<ol>` (lista ordenada) se utilizan para crear listas de elementos.
   - La etiqueta `<li>` se utiliza para definir cada elemento de la lista.

   Ejemplo de listas:
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
   ```

5. Etiquetas para enlaces e imágenes:
   - La etiqueta `<a>` se utiliza para crear enlaces a otras páginas o recursos. El atributo `href` se utiliza para especificar la URL de destino del enlace.

   - La etiqueta `<img>` se utiliza para insertar imágenes en la página. Los atributos `src` y `alt` se utilizan para especificar la ruta de la imagen y el texto alternativo, respectivamente.

   Ejemplo de enlaces e imágenes:
   ```html
   <a href="https://www.ejemplo.com">Enlace a Ejemplo</a>
   <img src="imagen.jpg" alt="Descripción de la imagen">
   ```

6. Estructura semántica con etiquetas específicas:
   - HTML5 introduce etiquetas semánticas que proporcionan un significado adicional al contenido. Algunas de estas etiquetas son `<header>`, `<nav>`, `<main>`, `<article>` y `<footer>`. Proporcionan información sobre la estructura del documento y facilitan la accesibilidad y el SEO.

   Ejemplo de estructura semántica:
   ```html
   <header>
       <!-- Contenido del encabezado -->
   </header>

   <nav>
       <!-- Contenido de la navegación -->
   </nav>

   <main>
       <!-- Contenido principal del documento -->
   </main>

   <article>
       <!-- Contenido de un artículo o sección independiente -->
   </article>

   <footer>
       <!-- Contenido del pie de página -->
   </footer>
   ```
