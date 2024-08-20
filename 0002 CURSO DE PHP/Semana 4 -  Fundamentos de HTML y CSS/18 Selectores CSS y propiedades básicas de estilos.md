
## Selectores CSS y propiedades básicas de estilos

El uso de selectores CSS para aplicar estilos a elementos específicos de nuestras páginas web. Exploraremos diferentes tipos de selectores y cómo utilizarlos para dirigirnos a elementos específicos del documento HTML. También veremos algunas propiedades CSS básicas para estilizar el contenido y mejorar el diseño de nuestras páginas.

### Contenido del tema:

1. Selectores de etiqueta:
   - Los selectores de etiqueta se utilizan para aplicar estilos a elementos específicos, como encabezados, párrafos, listas, etc.
   - Ejemplo de selector de etiqueta para estilizar todos los párrafos en un documento:
   ```css
   p {
       color: blue;
       font-size: 16px;
   }
   ```

2. Selectores de clase:
   - Los selectores de clase se utilizan para aplicar estilos a elementos que tienen una clase específica.
   - Ejemplo de definición de una clase y su aplicación a elementos HTML:
   ```css
   .mi-clase {
       background-color: yellow;
       padding: 10px;
   }
   ```

3. Selectores de ID:
   - Los selectores de ID se utilizan para aplicar estilos a un elemento que tiene un ID único en la página.
   - Ejemplo de definición de un ID y su aplicación a un elemento HTML:
   ```css
   #mi-id {
       border: 1px solid black;
       margin: 5px;
   }
   ```

4. Selectores de atributo:
   - Los selectores de atributo permiten aplicar estilos según el valor de los atributos de un elemento.
   - Ejemplo de selector de atributo para estilizar todos los enlaces que tengan un atributo `target`:
   ```css
   a[target] {
       color: red;
       text-decoration: underline;
   }
   ```

5. Combinación de selectores:
   - Podemos combinar selectores para estilizar elementos específicos de manera más precisa.
   - Ejemplo de combinación de selectores para estilizar los elementos `<p>` dentro de un elemento `<div>` con la clase `.contenedor`:
   ```css
   .contenedor p {
       font-style: italic;
   }
   ```

6. Propiedades básicas de estilos:
   - Estilos de texto: color, tamaño de fuente, tipo de fuente, alineación, etc.
   - Estilos de fondo: color de fondo, imagen de fondo, repetición, posición, etc.
   - Ejemplo de aplicación de estilos de texto y fondo:
   ```css
   h1 {
       font-size: 24px;
       font-family: "Arial", sans-serif;
       color: #336699;
       text-align: center;
   }

   body {
       background-color: #f0f0f0;
   }
   ```

7. Estilos de caja:
   - Margen, padding y border: controlar el espaciado y los bordes de los elementos.
   - Establecer dimensiones y modelo de caja.
   - Ejemplo de aplicación de estilos de caja:
   ```css
   .mi-elemento {
       width: 200px;
       height: 100px;
       margin: 10px;
       padding: 5px;
       border: 1px solid #ccc;
   }
   ```
