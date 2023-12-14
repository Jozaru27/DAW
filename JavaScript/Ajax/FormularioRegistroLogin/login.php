<?php
// Verifica si se enviaron datos mediante el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los valores de los campos del formulario
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];

    // Aquí deberías realizar la validación del inicio de sesión
    // Por ejemplo, comparar con información almacenada en una base de datos

    // Comprobación simple (debes mejorar esto en un entorno real)
    if ($nombre === "usuario" && $contraseña === "contraseña") {
        echo "Inicio de sesión exitoso. Bienvenido, $nombre!";
    } else {
        echo "Inicio de sesión fallido. Verifica tus credenciales.";
    }
}
?>
