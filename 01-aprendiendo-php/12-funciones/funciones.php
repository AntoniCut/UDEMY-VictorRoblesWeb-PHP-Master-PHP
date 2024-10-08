<?php
//  **********************************************************
//  **********  12-funciones  -----  funciones.php  **********
//  **********************************************************
?>

<html>
<title> 12 - Funciones en PHP </title>

</html>


<?php

//  ----------  FUNCIONES  ----------


//  -----------------------
//  -----  Ejemplo 1  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 1 - Funciones ---------- </h1>';

function muestra_nombres()
{

    echo '<h3> -----  Mi Primera Función en PHP  ----- </h3>';
    echo 'Antonio Francisco <br>';
    echo 'Víctor Robles <br>';
    echo 'Fernando Herrera <br>';
    echo 'Miguel Angel <br>';
}

muestra_nombres();



//  -----------------------
//  -----  Ejemplo 2  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 2 - Tabla Multiplicar ---------- </h1>';

function tabla($numero)
{

    //  var_dump('var_dump: '.$numero);
    echo "<h3> Tabla de multiplicar del numero: $numero </h3>";
    for ($i = 1; $i <= 10; $i++) {

        $operacion = $numero * $i;
        echo "$numero x $i = $operacion <br>";
    }
    echo '<br><br>';
}

tabla(55);
tabla(10);
tabla(7);


if (isset($_GET['numero'])) tabla($_GET['numero']);
else {
    echo '<h4>  Introducir parametro por la URL </h4>';
}


for ($i = 1; $i <= 10; $i++) tabla($i);



//  -----------------------
//  -----  Ejemplo 3  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 3 - Parametros ---------- </h1>';

function calculadora($numero1, $numero2)
{

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "Suma: $numero1 + $numero2 = $suma <br>";
    echo "Resta:$numero1 - $numero2 = $resta <br>";
    echo "Multiplicacion: $numero1 * $numero2 = $multiplicacion <br>";
    echo "Division: $numero1 / $numero2 = $division <br><br><br>";
}

calculadora(10, 5);
calculadora(-9, 4);



//  -----------------------
//  -----  Ejemplo 4  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 4 - Parametros Opcionales ---------- </h1>';

function calculadora2($numero1, $numero2, $negrita = false)
{

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    if ($negrita) echo '<h4>';

    echo "Suma: $numero1 + $numero2 = $suma <br>";
    echo "Resta:$numero1 - $numero2 = $resta <br>";
    echo "Multiplicacion: $numero1 * $numero2 = $multiplicacion <br>";
    echo "Division: $numero1 / $numero2 = $division <br><br><br>";

    if ($negrita) echo '</h4>';
}

calculadora2(10, 5);
calculadora2(-9, 4, true);



//  -----------------------
//  -----  Ejemplo 5  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 5 - Return ---------- </h1>';

function devuelve_nombre($nombre)
{

    return "el nombre es: <h3> $nombre </h3>";
}

echo devuelve_nombre('Antonio');

function calculadora3($numero1, $numero2, $negrita = false)
{

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    $cadena_texto = "";

    if ($negrita) $cadena_texto .= '<h4>';

    $cadena_texto .= "Suma: $numero1 + $numero2 = $suma <br>";
    $cadena_texto .= "Resta:$numero1 - $numero2 = $resta <br>";
    $cadena_texto .= "Multiplicacion: $numero1 * $numero2 = $multiplicacion <br>";
    $cadena_texto .= "Division: $numero1 / $numero2 = $division <br><br><br>";

    if ($negrita) $cadena_texto .= '</h4>';

    //var_dump($cadena_texto);
    return $cadena_texto;
}

echo calculadora3(10, 5);
echo calculadora3(-9, 4, true);



//  -----------------------
//  -----  Ejemplo 6  -----
//  -----------------------
echo '<hr><h1 style="text-align: center"> ---------- Ejemplo 6 - Ejecutar una funcion dentro de otra ---------- </h1>';

function get_nombre($nombre)
{
    return "El nombre es: $nombre <br>";
}

function get_apellidos($apellidos)
{
    return " y los apellidos son: $apellidos <br><br>";
}


function devuelve_nombre2($nombre, $apellidos)
{
    return get_nombre($nombre) . get_apellidos(($apellidos));
}

echo devuelve_nombre2('Antonio', 'Cutillas');
echo get_nombre('Juan');
echo get_apellidos('Lopez');


?>