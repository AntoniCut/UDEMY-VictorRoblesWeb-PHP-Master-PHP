<?php
//  **************************************************************************
//  **********  15-ejercicios-programacion-bloque2/ejercicio04.php  **********
//  **************************************************************************
?>

<html>
<title> 15 - Ejercicio04 - Bloque 2 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 4 - BLOQUE 2 PROGRAMACIÓN EN PHP  ---------------------------
//  -  Hacer un programa que tenga 4 variables: una de tipo array, otra de tipo string,
//     otra int y otra booleana y que imprima un mensaje indicando el tipo de dato
//     de la variable. 
//  -----------------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 15 - Ejercicio 4 - Bloque 2 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";


//  -----  Array  -----
$matriz = [1, 2, 3, 4];
echo "<pre>";
var_dump($matriz);
echo "</pre>";
if(is_array($matriz)) echo "<h3> la variable matriz es de tipo array </h3>";


//  -----  String  -----
echo "<br><br><hr>";
$titulo = 'Master en PHP';
var_dump($titulo);
echo "</pre>";
if(is_string($titulo)) echo "<h3> la variable titulo es de tipo string </h3>";


//  -----  Int  -----
echo "<br><br><hr>";
$numero = 49;
var_dump($numero);
echo "</pre>";
if(is_integer($numero)) echo "<h3> la variable numero es de tipo integer </h3>";


//  -----  Booleana  -----
echo "<br><br><hr>";
$verdadero = true;
var_dump($verdadero);
echo "</pre>";
if(is_bool($verdadero)) echo "<h3> la variable verdadero es de tipo bool </h3>";


?>