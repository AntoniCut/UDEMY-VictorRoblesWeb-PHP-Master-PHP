<?php

        //  **********  Funciones Predefinidas  **********

//  Debuggear.
$nombre = "Antonio Cutillas";
var_dump($nombre);

//  Fechas.
echo date('d-m-y');
echo "<br>".date('y-m-d');
echo "<br>".time(); //  fecha en formato iunix.

//  Funciones matemáticas.
echo "<br> Raiz quadrada de 10: ".sqrt(10);
echo "<br> Numero aleatorio entre 10 y 40: ". rand(10, 40);
echo "<br> Numero pi: ".pi();
echo "<br> Redondear: ". round(7.891234, 2);  //  redondeo al alza


        //  **********  Mas funciones generales  **********

echo "<br>".gettype($nombre);   //  obtiene el tipo de una variable.

//  Detectar tipados.
if(is_string($nombre)) echo "<br> Esa variable es un string";
if(!is_float($nombre)) echo "<br> la variable nombre no es un numero con decimales";

//  Comprobar si existe una variable.
if(isset($edad)) echo "<br>La variable existe";
else echo "<br>La variable no existe";

//  Limpiar espacios.
$frase = "    mi contenido    ";
echo "<br>".$frase;
var_dump( trim($frase) );

//  Eliminar variables o indices de arrays.
$year = 220;
unset($year);
var_dump($year);

//  Comprobar si una variable vacia.
$texto = "";
if(empty($texto)) echo "<br> La variable texto esta vacia";
else echo "<br> La variable texto tiene contenido";

//  Cuenta los caracteres de un string.
$cadena = "123456";
echo "<br>".strlen($cadena);

//  Encontrar en un string la posicion de un caracter determinado.
$frase = "La vida es bella";
echo "<br>". strpos($frase, "vida");

//  Reemplazar contenido de un string.
$frase = str_replace("vida", "moto de Antonio", $frase);
echo "<br>".$frase;

//  Mayusculas y Minusculas.
echo "<br>". strtolower($frase);    //  Convierte a Mayusculas.
echo "<br>". strtoupper($frase);    //  Convierte a Minusculas.


?>



