<?php
//  **********************************************************
//  **********  12-funciones  -----  variables.php  **********
//  **********************************************************
?>

<html>
<title> 12 - Variables </title>
</html>

<?php


//  ----------  VARIABLES LOCALES  ----------
//  -  se declaran dentro de una función y no pueden ser usadas fuera de ellas,
//     a menos que se haga un return.

//  ----------  VARIABLES GLOBALES  ----------
//  -  se declaran fuera de una función y están disponibles dentro y fuera de las funciones.


//  -----------------------
//  -----  Ejemplo 1  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 1 - Variables Locales y Globales ---------- </h1>';


//  -----  Variable global  -----
$frase = 'Ni los genios son tan genios, ni los mediocres tan mediocres. <br>';
echo $frase;

function hola_mundo() {
    // Acceder a una variable global
    global $frase;
    echo "<h4> $frase </h4>";

    // Variable local
    $year = 2024;
    echo "<h4> $year </h4>";
    return $year;
}

// No se puede usar $year fuera de la función ya que es una variable local
// echo $year; // Esto daría un error.

echo hola_mundo();



//  -----------------------
//  -----  Ejemplo 2  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 2 - Funciones Variables ---------- </h1>';

// Funciones para diferentes momentos del día
function buenas_dias() {
    return "<br> ¡Hola! ¡Buenos días! <br>";
}

function buenas_tardes() {
    return "<br> ¡Hola! ¿Qué tal ha ido la comida? <br>";
}

function buenas_noches() {
    return "¿Te vas a dormir ya? ¡Buenas noches! <br>";
}


//  -----  Invocación a una función mediante una variable  -----
$horario = "buenas_noches";


// Verificamos si la función existe antes de invocarla
if (function_exists($horario)) echo $horario();  // Llama a la función buenas_noches()
else  echo "La función $horario no existe.";


// Si intentamos concatenar una variable con otra función
$horario = "tardes";  // Cambiamos el valor a "tardes"
$mi_funcion = "buenas_" . $horario;

if (function_exists($mi_funcion)) {
    echo $mi_funcion();  // Llama a la función buenas_tardes()
} else {
    echo "La función $mi_funcion no existe.";
}


//  -----  método $_GET[]  -----
$horario = $_GET['horario'];
$mi_funcion = "buenas_" . $horario;
echo "<h4> Metodo GET </h4>$mi_funcion";




?>
