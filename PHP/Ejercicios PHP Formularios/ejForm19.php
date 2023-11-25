<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 19. Crea un programa donde se le seleccione el curso (radiobutton), los módulos (a seleccionar de un desplegable) y las horas (marcar o desmarcar) y genere un horario usando una tabla
 *
 */

// Arrays para cursos, módulos y horas
$cursos = array(
    "curso1" => "Curso 1",
    "curso2" => "Curso 2",
    "curso3" => "Curso 3"
);

$modulos = array(
    "modulo1" => "Módulo 1",
    "modulo2" => "Módulo 2",
    "modulo3" => "Módulo 3"
);

$horas = array(
    "hora1" => "8:00 - 9:00",
    "hora2" => "9:00 - 10:00",
    "hora3" => "10:00 - 11:00"
);

// Obtenemos los datos del formulario. Primero, los valores seleccionados para cada modalidad. Luego verificamos que el usuario haya seleccionado al menos un módulo y una hora para mostrar el horario en una tabla
// El contenido de las celdas de datos siempre será "Contenido". La página se mostrará con el curso escogido en un título, los módulos en el th y el horario en la fila de td izquierda
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
    $cursoSeleccionado = isset($_GET['curso']) ? $_GET['curso'] : '';
    $modulosSeleccionados = isset($_GET['modulos']) ? $_GET['modulos'] : array();
    $horasSeleccionadas = isset($_GET['horas']) ? $_GET['horas'] : array();

    if (!empty($modulosSeleccionados) && !empty($horasSeleccionadas)) {
        echo '<h3>Horario para ' . $cursos[$cursoSeleccionado] . ':</h3>';
        echo '<table border="1">';
        echo '<tr>';
        echo '<th>Hora</th>';
    
        foreach ($modulosSeleccionados as $modulo) {
            echo '<th>' . $modulos[$modulo] . '</th>';
        }
    
        echo '</tr>';
    
        foreach ($horasSeleccionadas as $hora) {
            echo '<tr>';
            echo '<td>' . $horas[$hora] . '</td>';
    
            foreach ($modulosSeleccionados as $modulo) {
                echo '<td>Contenido</td>';
            }
    
            echo '</tr>';
        }
        echo '</table>';
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
    <title>Form 19 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 19 - Jose Zafrilla</h2>

    <form action="ejForm19.php" method="get">
        <label>Seleccione el curso:</label><br>
        <?php foreach ($cursos as $key => $curso) : ?>
            <input type="radio" name="curso" value="<?php echo $key; ?>" id="<?php echo $key; ?>">
            <label for="<?php echo $key; ?>"><?php echo $curso; ?></label><br>
        <?php endforeach; ?>

        <br>

        <label>Seleccione los módulos:</label><br>
        <select name="modulos[]" multiple>
            <?php
            foreach ($modulos as $clave => $valor) {
                echo '<option value="' . $clave . '">' . $valor . '</option>';
            }
            ?>
        </select>

        <br>

        <label>Seleccione las horas:</label><br>
        <?php foreach ($horas as $key => $hora) : ?>
            <input type="checkbox" name="horas[]" value="<?php echo $key; ?>" id="<?php echo $key; ?>">
            <label for="<?php echo $key; ?>"><?php echo $hora; ?></label><br>
        <?php endforeach; ?>

        <br>

        <input type="submit" value="Generar Horario">
    </form> 
</body>
</html>