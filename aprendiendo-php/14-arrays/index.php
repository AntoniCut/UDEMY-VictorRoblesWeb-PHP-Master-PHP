<?php
//  *******************************************
//  **********  14-arrays/index.php  **********
//  *******************************************
?>

<html>
<title> 14 - Arrays en PHP </title>

</html>


<?php


//  ----------  ARRAYS  INDEXADOS  ----------
//  -  Un Array es una colección o un conjunto de datos / valores, bajo un unico nombre
//  -  y para acceder a esos valores podemos usar un indice numerico o alfanumerico.

echo '<hr><h1 style="text-align: center"> ---------- 14 - Arrays en PHP ---------- </h1>';

//  -----  Variable  -----
$pelicula = 'Batman';

//  -----  Array  -----
$peliculas = array('Batman', 'Spiderman', 'El Señor de los Anillos');

var_dump($peliculas);

echo "<br>";
var_dump($peliculas[0]);

echo "<br>";
var_dump($peliculas[1]);

echo "<br>";
var_dump($peliculas[2]);

echo "<br>";
var_dump($peliculas[3]);


$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];
echo "<br>";
var_dump($cantantes);


echo "<br><br><hr><br>";
echo "pelicula posicion 0: $peliculas[0] <br> Cantante posicion 2: $cantantes[2]";


//  -----  bucle FOR  -----
echo "<br><br><hr>";
echo "<h4> Listado de Peliculas </h4>";

echo "<ul>";
for ($indice = 0; $indice < count($peliculas); $indice++) echo "<li>" . $peliculas[$indice] . "</li>";
echo "</ul>";


//  -----  bucle FOREACH  -----
echo "<br><br><hr>";
echo "<h4> Listado de Cantantes </h4>";

echo "<ul>";
foreach ($cantantes as $cantante) echo "<li>" . $cantante . "</li>";
echo "</ul>";


//  ----------  ARRAYS ASOCIATIVOS  ----------
echo '<hr><h1 style="text-align: center"> ---------- Arrays Asociativos ---------- </h1>';

$personas = array(

    'nombre' => 'Antonio Francisco',
    'apellidos' => 'Cutillas Garcias',
    'web' => 'https://udemy.antonydev.tech/jquery-de-cero-a-avanzado'
);

var_dump($personas);
echo "<br>";
var_dump($_GET);
echo "<br>";


//  ----------  ARRAYS MULTIDIMENSIONALES  ----------
echo '<br><hr><h1 style="text-align: center"> ---------- Arrays Multidimensionales ---------- </h1>';

$contactos = array(

    array(
        'nombre' => 'Antonio Francisco',
        'apellidos' => 'Cutillas Garcias',
        'web' => 'https://udemy.antonydev.tech/jquery-de-cero-a-avanzado'
    ),

    array(
        'nombre' => 'Luis Francisco',
        'apellidos' => 'Martinez Lopez',
        'web' => 'https://luis.tech'
    ),

    array(
        'nombre' => 'Victor',
        'apellidos' => 'Robles',
        'web' => 'https://victorrobles.wew.es'
    )

);

echo "<br>";
echo "<pre>";
var_dump($contactos);
echo "</pre>";

echo "<br> Acceder a Luis: ";
echo $contactos[1]['nombre'];

echo "<br> Acceder a la web de Antonio Francisco: ";
echo $contactos[0]['web'];


echo "<h4> Listado de Contactos... </h4>";
echo "<ul>";

foreach ($contactos as $contacto) {

    foreach ($contacto as $info) echo "<li>" . $info . "</li>";
    echo "<br>";
}

echo "</ul>";


//  ----------  FUNCIONES PARA ARRAYS  ----------
echo '<br><hr><h1 style="text-align: center"> ---------- Funciones para Arrays ---------- </h1>';


//  -----  ORDENAR  -----

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
echo "<br> sin ordenar";
echo "<pre>";
var_dump($cantantes);
echo "</pre>";


//  -----  asort()  -----  ordenar alfabeticamente.
asort($cantantes);
echo "<br> ordena alfabeticamente";
echo "<pre>";
var_dump($cantantes);
echo "</pre>";


//  -----  arsort()  -----  ordenar alfabeticamente en orden inverso.
arsort($cantantes);
echo "<br> orden inverso";
echo "<pre>";
var_dump($cantantes);
echo "</pre>";



$numeros = [1, 2, 5, 8, 3, 4];
echo "<br> sin ordenar";
echo "<pre>";
var_dump($numeros);
echo "</pre>";

//  -----  sort()  -----  ordenar alfabeticamente y numericamente.
sort($numeros);
echo "<br> alfabeticamente y numericamente";
echo "<pre>";
var_dump($numeros);
echo "</pre>";


//  -----  AÑADIR ELEMENTOS  -----
$cantantes[] = 'Natos';
array_push($cantantes, 'Waor');
echo "<br> añadir a cantantes";
echo "<pre>";
var_dump($cantantes);
echo "</pre>";


//  -----  ELIMINAR ELEMENTOS  -----
array_pop($cantantes);  //  elimina el ultimo elemento.
echo "<br> elimina ultimo elemento";
echo "<pre>";
var_dump($cantantes);
echo "</pre>";

unset($cantantes[2]);  //  elimina el ultimo elemento.
echo "<br> elimina de la posicion 2";
echo "<pre>";
var_dump($cantantes);
echo "</pre>";


//  -----  SACAR UN ELEMENTO ALEATORIO PERO NO ELIMINA  -----
$indice = array_rand($cantantes);
echo "<br> Saca un elemento aleatorio de indice: " . $indice;
echo "<br>" . $cantantes[$indice];
echo "<br> ";
echo "<pre>";
var_dump($cantantes);
echo "</pre>";


//  -----  REVERSE O DARLE LA VUELTA  -----
echo "<br> array numeros";
echo "<pre>";
var_dump($numeros);
echo "</pre>";

echo "<br> reverse del array numeros";
echo "<pre>";
var_dump(array_reverse($numeros));
echo "</pre>";


//  -----  BUSCAR DENTRO  -----
echo "<br> array Cantantes Buscar indice de 'Drake'";
echo "<pre>";
$resultado = array_search('Drake', $cantantes);
var_dump($cantantes);
var_dump($resultado);
echo "</pre>";


//  -----  Nº DE ELEMENTOS  -----
echo "<br> Nº Elementos del array Cantantes: ".count($cantantes);
echo "<br> Nº Elementos del array numeros: ".sizeof($numeros);


echo "<br><br><br><br><hr>";


?>