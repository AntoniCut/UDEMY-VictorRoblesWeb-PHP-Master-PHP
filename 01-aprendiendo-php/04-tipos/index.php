<html>
    <title> 04- Tipos de Datos </title>
</html>

<?php

//  **************************************************
//  **********  04-tipos  -----  index.php  **********
//  **************************************************

/*
    ********************************************************************
    TIPOS DE DATOS:
        - Entero (int / integer). ej. 99
        - Coma flotante o decimales. ej 3.45
        - Cadenas de caracteres o String. ej "Hola, yo soy un String"
        - Booleanos (bool)  true o false
        - null
        - Arrays o Vectores (conjunto o coleccion de datos).
        - Objetos  (Conjunto de datos y funciones independientes)
    ******************************************************************* 
 */
 

//  Declaracion de distintos tipos de variables.
$numero = 100;                          //  entero.
$decimal = 27.9;                        //  decimal.
$texto = "Soy un texto <br>  $numero";    //  string.
$verdadero = true;                      //  booleano.
$nula = null;                           //  null.

echo "<br>".$texto.'<br>';

echo "<br> <hr> <br>";

//  Obtener el tipo de una variable. gettype()
echo gettype($numero) ."<br>";          //  devuelve un integer.
echo gettype($decimal) ."<br>";         //  devuelve un double.
echo gettype($texto) ."<br>";           //  devuelve un string.
echo gettype($verdadero) ."<br>";       //  devuelve un boolean.
echo gettype($nula) ."<br>";            //  devuelve un NULL.

echo "<br> <hr> <br>";

//  Debugear
$mi_nombre = "Antonio Cutillas";
var_dump($mi_nombre);

$nombres = ["Antonio Cutillas", "Victor Robles"];
var_dump($nombres);


?>