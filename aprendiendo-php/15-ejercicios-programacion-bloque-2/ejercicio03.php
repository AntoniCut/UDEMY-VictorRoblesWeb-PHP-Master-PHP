<?php
//  **************************************************************************
//  **********  15-ejercicios-programacion-bloque2/ejercicio03.php  **********
//  **************************************************************************
?>

<html>
<title> 15 - Ejercicio03 - Bloque 2 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 3 - BLOQUE 2 PROGRAMACIÓN EN PHP  ---------------------
//  -  Hacer un programa que compruebe si una variable esta vacia y si esta vacia 
//     rellenarla con texto en minusculas pero mostrarlo convertido a mayusculas
//     y en negrita.
//  -----------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 15 - Ejercicio 3 - Bloque 2 Programación en PHP ---------- </h1>';
echo "<br><br><hr><br><br>";


//  -----  Creacion del Array  -----
$texto = '';
//$texto = 'Hola, yo soy el relleno de la variable $texto';

if( empty($texto) ) {

    $texto = 'Hola, yo soy el relleno de la variable $texto';
    $texto_mayus = strtoupper($texto);
    echo "<strong> $texto_mayus </strong>";
}

else {
    echo "La variable tiene este contenido dentro - $texto";
}


?>