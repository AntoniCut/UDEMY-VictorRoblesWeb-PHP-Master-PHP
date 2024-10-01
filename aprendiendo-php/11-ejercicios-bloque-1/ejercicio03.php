<html> <title> Elercicio 03 </title> </html>

<?php

//  ************************************************************    
//  **********  /ejercicios-bloque-1/ejercicio03.php  **********
//  ************************************************************

echo "<h4> Ejercicio 3: Escribir un script en PHP que imprima por pantalla los cuadrados de 
           los 40 primeros numeros naturales utilizando un bucle while y luego un for. </h4>";

echo "<h5> Utilizando un bucle WHILE ..... </h5>";

$numero = 1;

while($numero <= 40) {

    $cuadrado = $numero * $numero;
    echo "Cuadrado del numero $numero es $cuadrado <br>";
    $numero++;
}


echo "<h5> Utilizando un bucle FOR ..... </h5>";

for($numero=1; $numero <= 40; $numero++) {

    $cuadrado = $numero * $numero;
    echo "Cuadrado del numero $numero es $cuadrado <br>";
}