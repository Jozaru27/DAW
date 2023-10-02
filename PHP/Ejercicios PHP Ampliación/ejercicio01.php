<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 1. Escribe un programa que muestre tu horario de clase mediante una tabla imprimiendo desde php
 * el html necesario así como los datos.
*/

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Horari DAW</title>
    </head>
    <body>

    <h1>Horari DAW</h1>

    <style>
        table, th, td {
          border:1px solid black;
          text-align: center;
        }
        </style>
        <body>
        
        <table style="width:100%">
          <tr>
            <th></th>
            <th>Dilluns</th>
            <th>Dimarts</th>
            <th>Dimecres</th>
            <th>Dijous</th>
            <th>Divendres</th>
          </tr>
          <tr>
            <td>14:10 <br> 15:05</td>
            <td rowspan="2" style="background-color:#ffc8c8;">Desarrollo Web <br> Entorno Cliente</td>
            <td rowspan="2" style="background-color:#ffff64;">Despliegue de <br> Aplicaciones</td>
            <td></td>
            <td rowspan="2" style="background-color:#ffc8c8;">Desarrollo Web <br> Entorno Cliente</td>
            <td rowspan="2" style="background-color:#ffd232;">Desarrollo Web <br> Entorno Servidor</td>
          </tr>
          <tr>
            <td >15:05 <br> 16:00</td>
            <td rowspan="2" style="background-color:#ffd232;">Desarrollo Web <br> Entorno Servidor</td>
          </tr>
          <tr>
            <td>16:00 <br> 16:55</td>
            <td style="background-color:#01df00;">Empresa e Iniciativa</td>
            <td style="background-color:#01df00;">Empresa e Iniciativa</td>
            <td style="background-color:#ffd232;">Desarrollo Web <br> Entorno Servidor</td>
            <td style="background-color:#01df00;">Empresa e Iniciativa</td>
          </tr>
          <tr>
            <td></td>
            <td colspan="5">Recreo</td>
          </tr>
          <tr>
            <td>17:05 <br> 18:00</td>
            <td rowspan="2" style="background-color:#ffd232;">Desarrollo Web <br> Entorno Servidor</td>
            <td style="background-color:#d2d26e">Tutoría</td>
            <td rowspan="2" style="background-color: #64b4f0;">Diseño Interfaces</td>
            <td style="background-color:#ffd232;">Desarrollo Web <br> Entorno Servidor</td>
            <td rowspan="2" style="background-color: #64b4f0;">Diseño Interfaces</td>
          </tr>
          <tr>
            <td>18:00 <br> 18:55</td>
            <td rowspan="3" style="background-color:#ffc8c8;">Desarrollo Web <br> Entorno Cliente</td></td>
            <td rowspan="2" style="background-color:#ffff64;">Despliegue de Aplicaciones</td>
          </tr>
          <tr>
            <td>18:55 <br> 19:50</td>
            <td rowspan="2" style="background-color: #64b4f0;">Diseño de Interfaces</td>
            <td rowspan="2" style="background-color:#ffff64;">Despliegue de Aplicaciones</td>
          </tr>
          <tr>
            <td>19:50 <br> 20:45</td>
          </tr>
        </table>
    </body>
</html>

<?php

/** 
*comando en consola: php -S localhost:8000
*en navegador escribir: localhost:8000/ejercicio01.php
*/

?>