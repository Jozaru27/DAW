<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>

<form method="post" action="procesar.php" enctype="multipart/form-data">
    <label for="nombre">Nombre completo:</label>
    <input type="text" name="nombre" required>
    <br>

    <label for="password">Contraseña (mínimo 6 caracteres):</label>
    <input type="password" name="password" minlength="6" required>
    <br>

    <label for="nivelEstudios">Nivel de Estudios:</label>
    <select name="nivelEstudios" required>
        <option value="Sin estudios">Sin estudios</option>
        <option value="Educación Secundaria Obligatoria">Educación Secundaria Obligatoria</option>
        <option value="Bachillerato">Bachillerato</option>
        <option value="Formación Profesional">Formación Profesional</option>
        <option value="Estudios Universitarios">Estudios Universitarios</option>
    </select>
    <br>

    <label for="nacionalidad">Nacionalidad:</label>
    <select name="nacionalidad" required>
        <option value="Española">Española</option>
        <option value="Otra">Otra</option>
    </select>
    <br>

    <label for="idiomas">Idiomas:</label>
    <input type="checkbox" name="idiomas[]" value="Español"> Español
    <input type="checkbox" name="idiomas[]" value="Inglés"> Inglés
    <input type="checkbox" name="idiomas[]" value="Francés"> Francés
    <input type="checkbox" name="idiomas[]" value="Alemán"> Alemán
    <input type="checkbox" name="idiomas[]" value="Italiano"> Italiano
    <br>

    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>

    <label for="foto">Adjuntar Foto (jpg, gif, png, máximo 50 KB):</label>
    <input type="file" name="foto" accept=".jpg, .jpeg, .gif, .png" required>
    <br>

    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
</form>

</body>
</html>
