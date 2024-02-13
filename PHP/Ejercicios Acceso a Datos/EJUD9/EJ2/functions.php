<?php

function CLIENTE($result){
    echo "<table border='1'>";
            echo "<tr><th>DNI</th><th>NOMBRE</th><th>APELLIDOS</th><th>DIRECCION</th><th>POBLACION</th><th>TELEFONO</th><th>FECHA_NAC</th></tr>";

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>{$row['DNI']}</td>";
                echo "<td>{$row['NOMBRE']}</td>";
                echo "<td>{$row['APELLIDOS']}</td>";
                echo "<td>{$row['DIRECCION']}</td>";
                echo "<td>{$row['POBLACION']}</td>";
                echo "<td>{$row['TELEFONO']}</td>";
                echo "<td>{$row['FECHA_NAC']}</td>";
                echo "</tr>";
            }

            echo "</table>";
}

?>