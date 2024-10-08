<html> <title> Elercicio 04 </title> </html>

<?php

//  ************************************************************    
//  **********  /ejercicios-bloque-1/ejercicio04.php  **********
//  ************************************************************

echo "<h4> Ejercicio 4: Escribir un script en PHP que recoja 2 numeros por la URL (parametro GET) 
           y hacer todas las operaciones basicas de una calculadora 
           (suma, resta, multiplicacion y division) de esos numeros. </h4>";


var_dump($_GET);

//  *****  Comprobar si los numeros pasados por la URL existen  *****
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    
    if($numero2 == 0) {
        echo "<h1> El valor de numero 2 no puede ser 0";
        return;
    } else $division = $numero1 / $numero2;

    echo "Suma de $numero1 + $numero2 = $suma <br>";
    echo "Resta de $numero1 - $numero2 = $resta <br>";
    echo "Multiplicacion de $numero1 * $numero2 = $multiplicacion <br>";
    echo "Division de $numero1 / $numero2 = $division";

} else echo "<h1> Introduce correctamente los valores por la URL </h1>";
