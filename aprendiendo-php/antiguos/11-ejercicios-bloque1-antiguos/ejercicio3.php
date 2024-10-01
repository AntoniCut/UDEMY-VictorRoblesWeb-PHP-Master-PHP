<?php

/*  Ejercicio 3:    Escribir un script en PHP que imprima por pantalla los cuadrados de los 40 primeros
 *                      numeros naturales utilizando un bucle while y luego un for.
*/

echo "<h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *****  Ejercicio 3 - Bloque 1  ***** </h1>";

$contador=0;
while($contador<=40) {

    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado </h3>";
    $contador++;
   
} 

for($contador=0; $contador <=40; $contador++) {
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado </h3>";
}
    

?>

