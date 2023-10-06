<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 6. Escribe un programa que lea tres números positivos y compruebe si son iguales. Por ejemplo:
 * Si la entrada fuese 5 5 5, la salida debería ser “hay tres números iguales a 5“.
 * Si la entrada fuese 4 6 4, la salida debería ser “hay dos números iguales a 4“.
 * Si la entrada fuese 0 1 2, la salida debería ser “no hay números iguales“
 */

  $num1 = readline("Introduce un número positivo \n");
  $num2 = readline("Introduce un número positivo \n");
  $num3 = readline("Introduce un número positivo \n");

  if ($num1 == $num2 && $num1 == $num3){
    echo "Hay tres números iguales a $num1 \n";
  }

?>