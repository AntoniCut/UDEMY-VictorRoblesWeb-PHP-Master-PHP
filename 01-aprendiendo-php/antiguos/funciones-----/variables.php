<?php

//  Variables Locales:  se declaran dentro de una funcion y no pueden
//       ser usadas fuera de las funciones, solo estan disponibles dentro.
//       A no ser que hagamos un return.

//  Variables Globales:  se declaran fuera de una funcion y estan
//       disponibles dentro y fuera de las funciones.

//  variable global.
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function holaMundo() {
    global $frase;
    echo "<h1> $frase </h1>";
    
    $year = 2019;
    echo "<h1> $year </h1>";
    
    return $year;
}

echo holaMundo();

echo $year;  //  daria error por ser variable local.

echo holaMundo();


echo "<br><br><hr>";

//  Funciones variables.

function buenasDias() {
    return "<h1> Hola!!, Buenos Dias :) </h1>";
}

function buenasTardes() {
    return "<h1> Hey!!, Que tal ha ido la comida?? </h1>";
}

function buenasNoches() {
    return "<h1> Te vas a dormir ya?, Buenas Noches!! </h1>";
}

//  ejemplo 1.

$horario = "buenasNoches";
echo $horario();

echo "<br><br>";

//  ejemplo 2.

$horario = "Noches";
$miFuncion = "buenas".$horario;
echo $miFuncion();

$horario = "Tardes";
$miFuncion = "buenas".$horario;
echo $miFuncion();

$horario = $_GET['horario'];
$miFuncion = "buenas".$horario;
echo $miFuncion();




?>