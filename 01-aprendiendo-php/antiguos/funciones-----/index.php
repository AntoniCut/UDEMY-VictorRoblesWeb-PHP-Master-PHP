<?php

/*  Funciones: Conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilizarse 
 *                   solamente invocando a la funcion tantas veces como queramos.

    function nombreDeMiFuncion( $parametro ) {
 *      //  Bloque / Conjunto de instrucciones.
    }
 
 * nombreDeMiFuncion( $parametro;
 * nombreDeMiFuncion( $parametro;
 
 */

//  *****  Ejemplo1  *****

//  Declarar la funcion.
function muestraNombres() {
    echo "Antonio Cutillas <br>";
    echo "Victor Robles <br>";
    echo "Miguel Navarro <br>";
    echo "Francisco Garcia <br>";
    echo "<hr>";
}

//  Invocaciones de funciones.
muestraNombres();
muestraNombres();
muestraNombres();


//  *****  Ejemplo 2 *****

function tabla($numero) {
    //var_dump($numero);
    //echo $numero;
    echo "<h3> *****  Tabla de Multiplicar del numero: $numero </h3>";
    for($i=1; $i<=10; $i++) {
        $operacion = $numero * $i;
        echo "$numero * $i  = $operacion <br>";
    }
}

//  pasamos valor por la URL con $_GET.
if( isset($_GET['numero'])) {
    
    tabla($_GET['numero']);
    
} else {
    echo"No hay numero para sacar la tabla <br>";
}

echo "<hr>";
//  Tablas de multiplicar del 0 al 10.
for($i=0; $i<=10;  $i++) {
    tabla($i);
}

echo "<hr>";

//  **********  Ejemplo 3  **********

function calculadora($numero1, $numero2, $negrita=false) {      //  $negrita=false  parametro opcional.
    
    //  Conjunto de instrucciones  a ejecutar.
    
    echo "*****  $numero1 y $numero2 ***** <br><br>";
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    $cadena_texto = "";
    
    if($negrita)  
        
        $cadena_texto .= "<h1>";
    
    $cadena_texto .= "Suma: $suma <br> ";
    $cadena_texto .= "Resta: $resta <br> ";
    $cadena_texto .= "Multiplicacion: $multiplicacion <br> ";
    $cadena_texto .= "Division: $division <br> ";
    $cadena_texto .= "<hr>";
    
    if($negrita)  $cadena_texto .= "</h1>";
    
    //var_dump($cadena_texto);
    return $cadena_texto;
}

echo calculadora(10, 30) ."<br>";
echo calculadora(12, 55, true) ."<br>";
echo calculadora(15, 32, false) ."<br>";


echo "<hr>";


//  **********  Ejemplo 4  -  funciones con 'return'  **********


if(isset($_GET['nombre']) && isset($_GET['apellidos'])) {
    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    echo devuelveNombreApellidos($nombre, $apellidos);
} else {
    echo "Error: Los parámetros 'nombre' y 'apellidos' no están definidos en la URL.";
}

function getNombre($nombre) {
    
    $texto = "el nombre es: " .$nombre ."<br>";
    return $texto;
}

function getApellidos($apellidos) {
    
    $texto = " los apellidos son: " .$apellidos ."<br>";
    return $texto;
}


function devuelveNombreApellidos($nombre, $apellidos) {   
   
   $texto = getNombre($nombre) . getApellidos($apellidos);
   return $texto;
       
}


?>