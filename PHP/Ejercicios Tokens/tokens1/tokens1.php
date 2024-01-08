<?php
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Crea un token de formulario para el formulario del ejercicio 1 de Roles (Gerente, Sindicalista y
 * Responsable de Nóminas) de modo que se pueda asegurar la sesión de cada usuario desde la
 * página del formulario a la página personalizada de cada uno. Debes comprobar el resultado
 * avisando en caso de que el token no coincida. Puedes añadir un botón cambiar SID que
 * generará un nuevo token en la sesión y así comprobar que detecta si la SID no coincide.
 * 
 */

// Iniciamos la Sesión
session_start();

// Si no está el token creado, se crea y se guarda en la sesión
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
}

// Recoge los datos del formulario (Usuario, Rol/Perfil).
// Guarda los datos en una variable (contorl de errores).
// Guarda los datos en la Sesión (los llamaremos después).
// Guarda en la sesión el Código del Token del formulario (para comparar en los sub-ficheros .php).
$usuario = $_POST["usuario"];
$rol = $_POST["rol"];
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['rol'] = $_POST['rol'];
$_SESSION["codToken"] = $_POST["codToken"];


// Si se ha recibido el formulario, crea un vector de empleados predefinido (Usuario => Sueldo).
// Guarda el array en la sesión para poder llamarlo desde los sub-documentos .php.
// Dependiendo del rol seleccionado, redirige al documento .php asignado a cada rol.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = array("Javier" => 1050, "Ficus" => 950, "Rickinillo" => 951);
    $_SESSION["array"] = $array;

    switch ($rol) {
        case 'Gerente':
            header("Location: gerente.php");
            break;
        case 'Sindicalista':
            header("Location: sindicalista.php");
            break;
        case 'Responsable de Nóminas':
            header("Location: nominas.php");
            break;
    }
}

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
    <title>Tokens 1 Form - Jose Zafrilla</title>
</head>

<body>
    <h2>Tokens 1 Form - Jose Zafrilla</h2>
    <hr>

    <form action="tokens1.php" method="post">
        <h2>Introduzca el Usuario y el Perfil</h2>

        <!-- Línea en oculto para generar el código del token a comparar -->
        <input type="hidden" name="codToken" value="<?php echo $_SESSION['token']; ?>">

        <label for='usuario'>Usuario:</label>
        <input type='text' name='usuario'><br><br>

        <label for="rol">Perfil:</label>
        <input type="radio" name="rol" value="Gerente">Gerente
        <input type="radio" name="rol" value="Sindicalista">Sindicalista
        <input type="radio" name="rol" value="Responsable de Nóminas">Responsable de Nóminas<br><br>

        <button type="submit">Mostrar información de Salarios</button>
    </form>
</body>

</html>