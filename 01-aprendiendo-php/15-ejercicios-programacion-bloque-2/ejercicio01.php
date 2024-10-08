<?php
//  **************************************************************************
//  **********  15-ejercicios-programacion-bloque2/ejercicio01.php  **********
//  **************************************************************************
?>

<html>
<title> 15 - Ejercicio01 - Bloque 2 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 1 - BLOQUE 2 PROGRAMACIÓN EN PHP  ------------------
//  -  Hacer un programa que tenga un array con 8 números y hacer lo siguiente:
//      -  Recorrerlo y mostrarlo.
//      -  Ordenarlo y mostrarlo.
//      -  Mostrar su Longitud.
//      -  Buscar algun elemento.
//      -  Buscar algun elemento por la URL.
//  --------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 15 - Ejercicio 1 - Bloque 2 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";


//  -----  Creacion del Array  -----
$numeros = [10, 25, 1, -5, 8, 9, 8, 124];

//  -----  Función para mostrar el array  -----
function mostrar_array($numeros)
{
    $index = 0;
    $resultado = "";
    foreach ($numeros as $numero) {
        if ($index === count($numeros) - 1) $resultado .= $numero;
        else $resultado .= $numero . ", ";
        $index++;
    }
    return $resultado;
}


//  -----  Recorrer y Mostrar Array  -----
echo "<h3> Recorrer y Mostrar Array </h3>";
echo mostrar_array($numeros);


//  -----  Ordenar y Mostrar Array  -----
echo "<br><br><hr>";
echo "<h3> Ordenar y Mostrar Array </h3>";
sort($numeros);
echo mostrar_array($numeros);


//  -----  Mostrar su Longitud  -----
echo "<br><br><hr>";
echo "<h3> Mostrar su Longitud </h3>";
echo "Longitud del Array de Números: " . count($numeros);


//  -----  Buscar el Número -5  -----
echo "<br><br><hr>";
echo "<h3> Buscar el Número -5 </h3>";
echo "Buscar el numero -5 que esta en la posicion: " . array_search(-5, $numeros) . " del array de números";


//  -----  Buscar un numero de la variable $busqueda  -----
echo "<br><br><hr>";

$busqueda = -25;
$search = array_search($busqueda, $numeros);
echo "<h3> Buscar el Número $busqueda </h3>";

if ($search !== false) echo "El número $busqueda está en la posición: " . $search . " del array de números.";
else echo "El número $busqueda no está en el array de números";


//  -----  Buscar un numero por la URL  -----
echo "<br><br><hr>";

if (isset($_GET['numero'])) {

    $busqueda = $_GET['numero'];
    $search = array_search($busqueda, $numeros);
    echo "<h3> Buscar el Número $busqueda </h3>";

    if ($search !== false) echo "El número $busqueda está en la posición: " . $search . " del array de números.";
    else echo "El número $busqueda no está en el array de números";

} else echo "<h5> Introduce un numero por la URL </h5>";



?>