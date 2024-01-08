<?php
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Crea un formulario de autenticación para visualizar resultados basándote en el Ejercicio 10 de la
 * UD5 de modo que, según el usuario que acceda (recoge un nombre y perfil (Gerente,
 * Sindicalista y Responsable de Nóminas, todos excluyentes entre sí) y crea el vector de
 * empleados en este formulario), sea redirigido a su página personalizada donde pueda ver los
 * datos a los que tiene permiso. Así pues, el Gerente podrá ver todos los resultados del salario
 * mínimo, máximo y promedio, el sindicalista sólo puede acceder al salario medio y la
 * responsable de Nóminas al salario mínimo y máximo. Añade un título a cada página indicando
 * el rol o si es el formulario de la empresa junto con tu nombre. En cada perfil, añade un botón
 * cerrar sesión que permita liberar la sesión y volver a la página del formulario.
 * 
 */

// Iniciamos la Sesión
session_start(); 

// Recoge los datos del formulario (Usuario, Rol/Perfil).
// Guarda los datos en una variable (contorl de errores).
// Guarda los datos en la Sesión (los llamaremos después).
$usuario = $_POST["usuario"];
$rol = $_POST["rol"];
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['rol'] = $_POST['rol'];

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
    <title>Roles 1 Form - Jose Zafrilla</title>
</head>

<body>
    <h2>Roles 1 Form - Jose Zafrilla</h2>
    <hr>

    <form action="roles1.php" method="post">
        <h2>Introduzca el Usuario y el Perfil</h2>

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