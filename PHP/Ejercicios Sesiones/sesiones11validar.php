<?php 
session_start();

// Obtiene los valores actuales enviados desde la cabecera
$nombreActual = $_SESSION['nombre'] ?? '';
$apellidosActual = $_SESSION['apellidos'] ?? '';
$emailActual = $_SESSION['email'] ?? '';
$contraseñaActual = $_SESSION['contraseña'] ?? '';
$sexoActual = $_SESSION['sexo'] ?? '';
$estudiosActual = $_SESSION['estudios'] ?? '';
$situacionActual = $_SESSION['situacion'] ?? [];

// Obtiene los valores anteriores de la sesión
$nombreAntiguo = $_SESSION['nombreAntiguo'] ?? '';
$apellidosAntiguos = $_SESSION['apellidosAntiguo'] ?? '';
$emailAntiguo = $_SESSION['emailAntiguo'] ?? '';
$contraseñaAntigua = $_SESSION['contraseñaAntigua'] ?? '';
$sexoAntiguo = $_SESSION['sexoAntiguo'] ?? '';
$estudiosAntiguo = $_SESSION['estudiosAntiguo'] ?? '';
$situacionAntigua = $_SESSION['situacionAntigua'] ?? [];

// Muestra ambos
echo "Datos actuales: ", $nombreActual . "-" . $apellidosActual . "-" . $emailActual . "-" . $contraseñaActual . "-" . $sexoActual . "-" . $estudiosActual . "-" . implode(", ", $situacionActual) . "<br>";
echo "Datos antiguos: ", $nombreAntiguo . "-" . $apellidosAntiguos . "-" . $emailAntiguo . "-" . $contraseñaAntigua . "-" . $sexoAntiguo . "-" . $estudiosAntiguo . "-" . implode(", ", $situacionAntigua);
?>
