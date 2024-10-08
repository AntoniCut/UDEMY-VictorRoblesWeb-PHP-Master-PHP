<?php

/*  Ejercicio 2:    Escribir un script en PHP que nos muestre todos los numeros pares que hay del 1 al 100.
*/

echo "<h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *****  Ejercicio 2 - Bloque 1  ***** </h1>";

for( $numero=1; $numero<=100; $numero++) {
    
    if($numero==100) echo $numero;
    elseif($numero%2==0) {
        echo "$numero,";
        if($numero==100) echo "$numero";
    }
}

?>