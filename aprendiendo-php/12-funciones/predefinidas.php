<?php
//  *************************************************************
//  **********  12-funciones  -----  predefinidas.php  **********
//  *************************************************************
?>

<html>
<title> 12 - predefinidas </title>

</html>

<?php


//  ----------  FUNCIONES PREDEFINIDAS  ----------


//  -----------------------
//  -----  Ejemplo 1  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Funciones Predefinidas del Lenguaje PHP ---------- </h1>';


//  -----  var_dump()  --  debuggear  -----
$nombre = 'Antonio Cutillas';
var_dump($nombre);


//  -----  date()  --  fechas  -----
echo "<br><br> date('d-m-Y') - " . date('d-m-Y');
echo "<br> date('d-M-Y') - " . date('d-M-Y');
echo "<br> date('d-m-y') - " . date('d-m-y');


//  -----  time()  --  fecha timestamp  -----
echo "<br>time() - " . time();


//  -----  Matemáticas  -----
echo "<br><br> Raiz cuadrada de 10 = " . sqrt(10);
echo "<br> Numero aleatorio entre 10 y 40 = " . rand(10, 40);
echo "<br> Numero PI = " . pi();
echo "<br> Redondear 7.891234 a 2 digitos = " . round(7.891234, 2);


//  ----------  Mas funciones generales  ----------


//  -----  gettype()  ------
echo "<br><br> gettype('Antonio') - ".gettype('Antonio');

//  -----  is_ ()  -----
if(is_string('Antonio')) echo '<br> Antonio es un string';
else 'No es un string';

if(is_string(1)) echo '<br> 1 es un string';
else echo '<br> 1 No es un string';


//  -----  isset()  -----
if(isset($edad)) echo '<br> $edad existe';
else echo '<br> $edad no existe </br>';


//  -----  trim()  -----
$frase = "       mi   contenido      ";
var_dump($frase);
echo "<br>";
var_dump(trim($frase));
echo "<br><br>";

//  -----  eliminar variables / indices de arrays  -----
$year = 2024;
unset($year);
var_dump($year);


//  ----- empty()  -----
if(empty($year)) echo '<br><br> $year esta vacia';
else echo '<br><br> $year tiene contenido';


//  -----  strlen()  -----
$frase = "Mi Contenido";
echo "<br>".$frase." tiene ".strlen($frase). " caracteres";


//  -----  strpos  -----
echo "<br>$frase , 'contenido' esta en la posicion ".strpos($frase, 'contenido');

//  -----  str_replace()  -----
echo "<br><br>$frase";
$frase = str_replace('contenido', 'vida', $frase);
echo "<br>$frase , reemplaza 'contenido' por 'vida = ' $frase";


//  -----  strtolower() y strtoupper()  -----  
echo "<br> convertimos a minusculas - ".strtolower($frase);
echo "<br> convertimos a mayusculas - ".strtoupper($frase);


?>


