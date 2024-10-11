<?php
//  *******************************************************************************
//  **********  23-ejercicios-programacion-bloque-3/ejercicio01.alt.php  **********
//  *******************************************************************************
?>

<html>
<title> 23 - Ejercicio01.alt - Bloque 3 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 1 - BLOQUE 3 PROGRAMACIÓN EN PHP  ------------------
//  -  Crear una sesión que aumente su valor en uno o disminuya en uno
//     en función de si el parametro get counter esta a uno o a cero.
//  --------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 23 - Ejercicio 1 alt - Bloque 3 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";

session_start();

echo $_SESSION['numero'];


?>