<?php

/*  Ejercicio 4:    Escribir un script en PHP que recoja 2 numeros por la URL (parametro GET) y hacer todas
 *                       las operaciones basicas de una calculadora (suma, resta, multiplicacion y division)
 *                       de esos numeros.
*/

echo "<h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *****  Ejercicio 4 - Bloque 1  ***** </h1>";

var_dump($_GET);

if( isset($_GET['numero1']) && isset($_GET['numero2']) ) {
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<h1> Calculadora  </h1>";
    echo "Suma de $numero1 y $numero2 : " .($numero1+$numero2) ." <br>";
    echo "Resta de $numero1 y $numero2 : " .($numero1-$numero2) ." <br>";
    echo "Multiplicacion de $numero1 y $numero2 " .($numero1*$numero2) ." <br>";
    echo "Division de $numero1 y $numero2 : " .($numero1/$numero2) ." <br>";
       
} else {
    echo "<h1> Introduce correctamente los valores </h1>";
}






?>

