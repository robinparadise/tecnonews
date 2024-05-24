### Examen de TecnoNews

---

# **Examen de TecnoNews**

---

**Instrucciones:**
- Este examen consta de varias tareas relacionadas con la creación de un sitio web llamado TecnoNews.
- Lee cuidadosamente cada tarea y sigue las instrucciones proporcionadas.
- Puedes utilizar HTML, CSS, JavaScript y PHP para completar el examen.
- Se te evaluará tanto por la precisión como por la calidad de tu código.
- ¡Buena suerte!

---

**Tarea 1 (0 puntos):** Configuración de la base de datos

Crea la base de datos `tecnonews` con una tabla `articles` que tenga los siguientes campos:
- id (int)
- title (varchar)
- category (varchar)
- description (text)
- image (varchar)

También crea una tabla `users` que tenga los siguientes campos:
- id (int)
- name (varchar)
- email (varchar)
- bio (text)

Asegúrate de que la función `populateData();` en `config.php` esté descomentada para añadir datos a la base de datos. Luego, recuerda volver a comentarla. Además, asegúrate de introducir tu usuario y contraseña de MySQL en `config.php`.

---

**Tarea 2 (4 puntos):** Página posts news `posts.php`

La página principal (`index.php`) contine un botón que redirije a `posts.php`.

Crea una página llamada `posts.php` que utilice un grid con cards de Bootstrap para mostrar los artículos de la tabla `articles`. Cada card debe mostrar el título, la categoría y la imagen del artículo.

Usa la función `getPosts` en `db.php` para obtener los datos de la tabla `articles` y mostrarlos en la página principal.

Se valorará:
- La capacidad de hacer el grid responsive.
- El uso de componentes de Bootstrap para el diseño.
- Guarda en `/components` los componentes que se repiten en las páginas.

---

**Tarea 3 (2 puntos):** Navbar

Crea un navbar (`navbar.php`) con un logo y un menú de navegación con las siguientes opciones:
- Logo
- News
- Perfil

Incluye un componente "badge" de Bootstrap que indique el número de posts usando la función `getPostsCount` (por ejemplo al lado del link "news").

---

**Tarea 4 (4 puntos):** Página de artículos

Crea un modal que se abra al hacer clic en una card de la página principal o de la página de artículos. El modal debe mostrar la descripción del artículo y la imagen.

---

**Tarea 5 (extra 1 puntos):** Página del usuario

Crea una página llamada `profile.php` que muestre la información del usuario de la tabla `users`. La página debe mostrar el nombre, el email y la biografía del usuario.

- Usa la función `getOneUser` en `db.php` para obtener los datos del usuario y mostrarlos en la página.

---


**Puntuación total: 10 puntos**

¡Buena suerte!
