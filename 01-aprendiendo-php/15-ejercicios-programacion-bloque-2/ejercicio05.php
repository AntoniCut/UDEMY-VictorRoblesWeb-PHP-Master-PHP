<?php
//  **************************************************************************
//  **********  15-ejercicios-programacion-bloque2/ejercicio05.php  **********
//  **************************************************************************
?>

<html>
<title> 15 - Ejercicio05 - Bloque 2 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 5 - BLOQUE 2 PROGRAMACIÓN EN PHP  ---------------------

//  -  Crear un array con el contenido de la siguiente tabla:

//      ACCION     AVENTURA     DEPORTES
//      ------     --------     --------

//      GTA        ASSASING     FIFA 24
//      COD        CRASH        PES 24
//      PUGB       Prince of    MOTO GP 27

//  -  Representar esta Tabla cogiendo los Indices y valores de dentro del array.  
//  -  Cada Fila debe de ir en un fichero separado(includes).

//  -----------------------------------------------------------------------------


echo '<hr><h1 style="text-align: center"> ---------- 15 - Ejercicio 5 - Bloque 2 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";


$tabla = [
    "ACCION"   => ['GTA 5', 'Call of Duty', 'Pug'],
    "AVENTURA" => ['Assasing Creed', 'Crash Bandicoot', 'Prince of Persia'],
    "DEPORTES" => ['Fifa 24', 'PES 24', 'Moto GP 24'],
];


echo "<pre>";
var_dump($tabla);
echo "</pre>";


echo "<pre>";
var_dump(array_keys($tabla));
echo "</pre>";

//  -----  Obtenemos los indices del array y los guardamos en una variable  -----
$categorias = array_keys($tabla)


?>


<table border="1">

    <?php  
        require_once('includes_ejercicio5/encabezados.php');
        require_once('includes_ejercicio5/primera_fila.php');   
        require_once('includes_ejercicio5/segunda_fila.php');   
        require_once('includes_ejercicio5/tercera_fila.php');   
    ?>

</table>