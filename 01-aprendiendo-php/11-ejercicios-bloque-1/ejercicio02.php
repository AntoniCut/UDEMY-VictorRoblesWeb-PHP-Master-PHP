<html> <title> Elercicio 02 </title> </html>

<?php

//  ************************************************************    
//  **********  /ejercicios-bloque-1/ejercicio02.php  **********
//  ************************************************************

echo "<h4> Ejercicio 2: Escribir un script en PHP que nos muestre todos los numeros pares 
           que hay del 1 al 100.</h4>";


for ($numero = 1; $numero <= 100; $numero++) {

    if ($numero == 100) {
        echo $numero;
        break;
    }

    if ($numero % 2 == 0) echo $numero . " ,";
}
