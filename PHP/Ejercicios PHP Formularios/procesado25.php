<?php

// Recogemos los datos de los campos del formulario. Procesamos la foto, comprobando que lo subido se acople al tamaño/extensión, si no, dará error.
// Se crea un directorio de destino a modo de subcarpeta donde se subirá la imagen procesada
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $nivelEstudios = isset($_POST["nivelEstudios"]) ? $_POST["nivelEstudios"] : "";
    $nacionalidad = isset($_POST["nacionalidad"]) ? $_POST["nacionalidad"] : "";
    $idiomas = isset($_POST["idiomas"]) ? $_POST["idiomas"] : [];
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

    if (isset($_FILES["foto"])) {
        $foto = $_FILES["foto"];
        $extensionesValidas = ["jpg", "jpeg", "gif", "png"];
        $tamañoMaximo = 50 * 1024;

        if ($foto["error"] == UPLOAD_ERR_OK) {
            $nombreArchivo = $foto["name"];
            $tamañoArchivo = $foto["size"];
            $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

            if (in_array($extension, $extensionesValidas) && $tamañoArchivo <= $tamañoMaximo) {
                $nombreUnico = uniqid() . "." . $extension;

                $directorioDestino = "subida/";
                $rutaDestino = $directorioDestino . $nombreUnico;

                if (!file_exists($directorioDestino)) {
                    mkdir($directorioDestino, 0777, true);
                }

                move_uploaded_file($foto["tmp_name"], $rutaDestino);

                echo "<b>Imagen $nombreUnico procesada con éxito</b>";
            } else {
                echo "<b>Error: Extensión no válida o supera los 50 KB</b>";
            }
        } else {
            echo "<b>Error al subir la imagen</b>";
        }
    } else {
        echo "<b>Error: No se ha proporcionado ninguna imagen</b>";
    }

    // El resto de campos
    echo "<br><br>";
    echo "<em>Nombre completo:</em> <b> $nombre</b><br>";
    echo "<em>Contraseña:</em> <b> $password</b><br>";
    echo "<em>Nivel de Estudios:</em> <b> $nivelEstudios</b><br>";
    echo "<em>Nacionalidad:</em> <b> $nacionalidad</b><br>";
    echo "<em>Idiomas:</em>  <b>" . implode(", ", $idiomas) . "</b><br>";
    echo "<em>Email:</em> <b>$email</b><br>";
}
?>
