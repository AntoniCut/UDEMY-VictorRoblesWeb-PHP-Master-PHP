<?php

/*  Ejercicio 5:    Hacer un programa que muestre todos los numeros entre 2 numeros entre 2 numeros
 *                       que nos llegue por la URL ($_GET).
*/

echo "<h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *****  Ejercicio 5 - Bloque 1  ***** </h1>";

$numero1=0;
$numero2=0;
var_dump($_GET);

if( isset($_GET['numero1']) && isset($_GET['numero2']) ) {

    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo "<h1>*****  Numeros comprendidos entre $numero1 y $numero2 ***** </h1>";    

    if($numero1<$numero2) {
        
        for($i=$numero1; $i<=$numero2; $i++) {
            if($i==$numero2) {
                echo $i;
            } else {
                echo "$i, ";
            }
        }
        
    } else {
        echo "<h4> El numero 1 debe ser menor que el numero 2 </h4>";
    }
       
} else {
    echo "Los parametros get no existen";
}
      

?>

