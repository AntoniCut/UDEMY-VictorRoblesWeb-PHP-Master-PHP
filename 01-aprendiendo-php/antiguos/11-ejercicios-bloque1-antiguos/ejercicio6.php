<?php

/*  Ejercicio 6:    Hacer un programa que muestre una tabla en HTML con las tablas de multiplicar del 1 al 10.
*/

echo "<h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *****  Ejercicio 6 - Bloque 1  ***** </h1>";

echo "<table border='1'> <tr>";     //  Inicio de la tabla.

    echo "<tr>";    //  Inicio Fila 1 de celdas.
        for($cabecera=1; $cabecera<=10; $cabecera++) {
             echo "<td> Tabla del $cabecera </td>";
        }
    echo "</tr>";   //  Fin Fila 1 de celdas.

    echo "<tr>";    //  Inicio Fila 2 de celdas.
        for($i=1; $i<=10; $i++) {
             echo "<td>";
                for($x=1; $x<=10; $x++) {
                    echo "$i x $x = " .($i*$x) ."<br>";
                }
                echo "</td>";
        }
    echo "</tr>";   //  Fin Fila 2 de celdas.

echo "</table>";        //  Fin de la tabla.
      

?>

