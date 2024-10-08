<html>
    <title> 06- Operadores </title>
</html>

<?php

//  *******************************************************
//  **********  06-operadores  -----  index.php  **********
//  *******************************************************

//  Operadores Aritmeticos.

$numero1 = 55;
$numero2 = 33;

echo '-- Suma: ' .($numero1 + $numero2) .'<br>';
echo '-- Resta: ' .($numero1 - $numero2) .'<br>';
echo '-- Multiplicacion: ' .($numero1 * $numero2) .'<br>';
echo '-- Division: ' .($numero1 / $numero2) .'<br>';
echo '-- Resto: ' .($numero1 % $numero2) .'<br>';

echo '<br><hr><br>';
//  Operadores Incremento y Decremento.

$year = 2024;
echo '<h1>' .$year .'</h1>';

//  Incremento.
$year = 2024;
$year++;
echo '<h1>' .$year .'</h1>';

//  Decremento.
$year = 2024;
$year--;
echo '<h1>' .$year .'</h1>';

//  Pre-Incremento.
$year = 2024;
$year+=1;
echo '<h1>' .$year .'</h1>';

//  Pre-Decremento.
$year = 2024;
$year-=1;
echo '<h1>' .$year .'</h1>';

//  Operadores de Asignacion - Suma.
$edad = 55;
echo ($edad += 5);
var_dump($edad);

//  Operadores de Asignacion - Resta.
$edad = 55;
echo ($edad -= 5);
var_dump($edad);

//  Operadores de Asignacion - Multiplicacion.
$edad = 55;
echo ($edad *= 5);
var_dump($edad);

//  Operadores de Asignacion - Division.
$edad = 55;
echo ($edad /= 5);
var_dump($edad);


?>