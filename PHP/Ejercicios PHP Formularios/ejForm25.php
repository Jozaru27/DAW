<?php
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 25. Crea una Web para obtener los siguientes datos: Nombre completo, Contraseña (mínimo 6
 * caracteres), Nivel de Estudios(Sin estudios, Educación Secundaria Obligatoria, Bachillerato,
 * Formación Profesional, Estudios Universitarios), Nacionalidad (Española, Otra), Idiomas
 * (Español, Inglés, Francés, Alemán Italiano), Email, Adjuntar Foto (sólo extensiones jpg, gif y
 * png, tamaño máximo 50 KB). Además de las comprobaciones de validación, se debe comprobar
 * que sube fichero, que el fichero tiene extensión (puedes usar explode()) y ésta es válida, que hay
 * directorio donde guardarlo y que se genera con nombre único. Si todo ha ido bien, redirige al
 * usuario a una página donde se le indique que se ha procesado con éxito e incluye tu nombre y
 * grupo de clase.
 * 
 */


?>

<!-- HTML -->
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />

    <!-- Nombre del Autor -->
    <meta name="author" content="Jose Zafrilla Ruiz" />
    <link rel="author" href="https://github.com/Jozaru27">

    <!-- Título de Página -->
    <title>Jose Zafrilla - Formulario Ejercicio 25</title>
</head>
<body>

<form method="post" action="procesado25.php" enctype="multipart/form-data">
    <label for="nombre">Nombre completo:</label>
    <input type="text" name="nombre" required>
    <br><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" minlength="6" required>
    <br><br>

    <label for="nivelEstudios">Nivel de Estudios:</label>
    <select name="nivelEstudios" required>
        <option value="Sin estudios">Sin estudios</option>
        <option value="Educación Secundaria Obligatoria">Educación Secundaria Obligatoria</option>
        <option value="Bachillerato">Bachillerato</option>
        <option value="Formación Profesional">Formación Profesional</option>
        <option value="Estudios Universitarios">Estudios Universitarios</option>
    </select>
    <br><br>

    <label for="nacionalidad">Nacionalidad:</label>
    <select name="nacionalidad" required>
        <option value="Española">Española</option>
        <option value="Otra">Otra</option>
    </select>
    <br><br>

    <label for="idiomas">Idiomas:</label>
    <input type="checkbox" name="idiomas[]" value="Español"> Español
    <input type="checkbox" name="idiomas[]" value="Inglés"> Inglés
    <input type="checkbox" name="idiomas[]" value="Francés"> Francés
    <input type="checkbox" name="idiomas[]" value="Alemán"> Alemán
    <input type="checkbox" name="idiomas[]" value="Italiano"> Italiano
    <br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label for="foto">Adjuntar Foto (máximo 50 KB):</label>
    <input type="file" name="foto" accept=".jpg, .jpeg, .gif, .png" required>
    <br><br>

    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>

</body>
</html>
