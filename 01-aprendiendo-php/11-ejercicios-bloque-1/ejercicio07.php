<html> <title> Elercicio 07 </title> </html>

<?php

//  ************************************************************    
//  **********  /ejercicios-bloque-1/ejercicio07.php  **********
//  ************************************************************

echo "<h3> Ejercicio 7: Hacer un programa que muestre todos los numeros impares 
           entre 2 numeros que nos lleguen por la URL (GET). </h3>";


var_dump($_GET);


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {

        echo "<h4> Numeros Impares comprendidos entre" .$numero1 ." y " .$numero2 ."</h4>";

        for ($i = $numero1; $i <= $numero2; $i++) {

			if($i%2 != 0) {

				if ($i == $numero2 || $i == $numero2 - 1) {
					echo $i;
					break;
				}
	
				echo $i ." ,";
			}
            
        }

    } else {
        echo "<h1> Numero 1 Tiene que ser Mayor que Numero 2 </h1>";
        return;
    }

} else echo "<h1> Los parametros GET No Existen </h1>";


?>