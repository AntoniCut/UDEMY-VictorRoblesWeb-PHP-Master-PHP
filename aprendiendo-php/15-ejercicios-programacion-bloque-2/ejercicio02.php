<?php
//  **************************************************************************
//  **********  15-ejercicios-programacion-bloque2/ejercicio02.php  **********
//  **************************************************************************
?>

<html>
<title> 15 - Ejercicio02 - Bloque 2 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 2 - BLOQUE 2 PROGRAMACIÓN EN PHP  ------------------
//  -  Hacer un programa que añada elementos a un array mientras que su longitud 
//     sea menor a 120 y mostrarlo por pantalla:
//  --------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 15 - Ejercicio 2 - Bloque 2 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";


//  -----  Creacion del Array  -----
$coleccion = [];

for($i=0; $i<120; $i++) array_push($coleccion, "elemento - ".$i ."<br>");

echo "<pre>";
var_dump($coleccion);
echo "</pre>";


?>