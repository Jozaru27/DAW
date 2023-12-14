<?php
// Verifica si se enviaron datos mediante el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los valores de los campos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];
    $contraseña2 = $_POST["contraseña2"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];

    // Ahora puedes realizar operaciones con estos valores
    // Por ejemplo, imprimirlos:
    echo "Nombre: $nombre<br>";
    echo "Apellidos: $apellido<br>";
    echo "Correo: $correo<br>";
    echo "Contraseña: $contraseña<br>";
    echo "Repetir Contraseña: $contraseña2<br>";
    echo "DNI: $dni<br>";
    echo "Teléfono: $telefono<br>";
}
?>
