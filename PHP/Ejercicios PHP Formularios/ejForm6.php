<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 6. Ejercicio 4: Elabora un programa para determinar si una hora leída en la forma horas, minutos
 * y segundos está correctamente expresada. Utiliza funciones para la comprobación de datos
 * 
 * 
 */

 // Obtenemos la hora introducida en el form y la guardamos en la variable
 $hora = isset($_GET["hora"]) ? $_GET["hora"] : null;

 // Con este if, comprobamos que hora no esté null - sin embargo, esto es algo que ya hace el form al tener el required - Su uso es para evitar los errores iniciales cuando se abre la página por primera vez
 // Separamos las horas minutos y segundos . Comprueba que no se pasen. Si los segundos superan los 60, se convierte en un minuto. Lo mismo con el minuto y la hora. Si la hora se pasa de 24, salta un mensaje diferente en vez de la conversión
 if ($hora !== null) {
     $horas = explode(":", $hora)[0];
     $minutos = explode(":", $hora)[1];
     $segundos = explode(":", $hora)[2];
 
     while ($segundos >= 60) {
         $segundos -= 60;
         $minutos++;
     }
 
     while ($minutos >= 60) {
         $minutos -= 60;
         $horas++;
     }
 
     if ($horas > 23) {
         echo "Se pasa del día";
     } else {
         echo "Son $horas horas, $minutos minutos y $segundos segundos";
     }
 } else {
     $resultado = null;
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
    <title>Form 6 - Jose Zafrilla</title>
</head>


<body>
    <h2>Form 6 - Jose Zafrilla</h2>

    <form action="ejForm6.php" method="get">

        <label for="hora">Introduce una hora en formato HH:MM:SS:</label>
        <!-- Con este patrón, podemos forzar a que introduzca como queramos pattern="([01]?[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]"> sin embargo, nunca se pasaría de las 24 horas por lo que no lo usaremos -->
        <input type="text" id="hora" name="hora" required>
        <input type="submit" value="Comprobar">
 
    </form> 
</body>
</html>