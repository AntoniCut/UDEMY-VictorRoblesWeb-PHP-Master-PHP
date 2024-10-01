<html>
<title> Elercicio 06 </title>

</html>

<?php

//  ************************************************************    
//  **********  /ejercicios-bloque-1/ejercicio06.php  **********
//  ************************************************************

echo "<h4 style='text-align: center;'> Ejercicio 6:  Hacer un programa que muestre una tabla en HTML con las tablas de multiplicar del 1 al 10. </h4>";


echo "<table border='1' align='center'>";

//  -----  Cabecera.
echo "<tr>";
for ($cabecera = 1; $cabecera <= 10; $cabecera++) echo "<td> Tabla del $cabecera </td>";
echo "</tr>";

//  -----  Cuerpo de la Tabla  -----
for ($contador = 1; $contador <= 10; $contador++) {
	echo "<tr>";
	for ($tabla = 1; $tabla <= 10; $tabla++) echo "<td> $tabla X $contador = " . ($tabla * $contador) . "</td>";
	echo "</tr>";
}

echo "</table>";


?>