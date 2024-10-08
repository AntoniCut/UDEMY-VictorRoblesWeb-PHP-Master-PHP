<html> <title> Elercicio 05 </title> </html>

<?php

//  ************************************************************    
//  **********  /ejercicios-bloque-1/ejercicio05.php  **********
//  ************************************************************

echo "<h4> Ejercicio 5: Hacer un programa que muestre todos los numeros entre 2 numeros
           que nos llegue por la URL. </h4>";


var_dump($_GET);


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {

        echo "<h5> Numeros comprendidos entre" .$numero1 ." y " .$numero2 ."</h5>";

        for ($i = $numero1; $i <= $numero2; $i++) {

            if ($i == $numero2) {
                echo $i;
                break;
            }

            echo $i ." ,";
        }

    } else {
        echo "<h1> Numero 1 Tiene que ser Mayor que Numero 2 </h1>";
        return;
    }
} else echo "<h1> Los parametros GET No Existen </h1>";
