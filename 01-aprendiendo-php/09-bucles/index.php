<html>
    <title> 09 - Bucle WHILE y DO-WHILE </title>
</html>

<?php

//  ***************************************************
//  **********  09-Bucles  -----  index.php  **********
//  ***************************************************

/* ******************************************************************************************************** 
   Bucles: Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces 
    como sea necesario, en base a una condicion.                             

   *****  Bucle WHILE  *****
 * 
 *      while(condigion) {
 *          bloque de instrucciones.
 *          otra instruccion.
 *      } 
 * 
 ***********************************************************************************************************
*/


//  *****  Ejemplo con el bucle 'while'  *****
$numero=0;
echo '<h4>Mostrar los numeros del 0 al 100 </h4>';
while($numero <=100) {
    
    echo $numero;
    if($numero != 100) echo ", ";
       
    $numero++;
}

echo "<br><br><hr><br>";


//  *****  Ejemplo con get para el ejemplo de la tabla de Multiplicar  *****

if( isset($_GET['numero']) ) {
    
    //  Casting. Convertir a numero.
    $numero = (int)$_GET['numero'];
} else $numero=1;
    

var_dump($numero);

echo "<h1> Tabla de multiplicar del numero $numero </h1>";

$contador=0;
while($contador<=10) {
    echo "$numero x $contador = " .($numero*$contador) ."<br>";
    $contador++;
}

echo "<br><hr>";

/*  ****************************************************************************
/*  *****  Bucle DO WHILE  *****
 * 
 * do {
 *      //  bloque de instrucciones.
 * }whule(condicion)
 * 
 *******************************************************************************
 */

$edad=20;
$contador=1;

do {
    
    echo "Tienes acceso al local privado $contador <br>";
    $contador++;
    
}while($edad>=18 && $contador<=10);


?>