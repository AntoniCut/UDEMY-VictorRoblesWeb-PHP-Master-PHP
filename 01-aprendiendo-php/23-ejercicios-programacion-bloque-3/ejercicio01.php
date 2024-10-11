<?php
//  ***************************************************************************
//  **********  23-ejercicios-programacion-bloque-3/ejercicio01.php  **********
//  ***************************************************************************
?>

<html>
<title> 23 - Ejercicio01 - Bloque 3 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 1 - BLOQUE 3 PROGRAMACIÓN EN PHP  ------------------
//  -  Crear una sesión que aumente su valor en uno o disminuya en uno
//     en función de si el parametro get counter esta a uno o a cero.
//  --------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 23 - Ejercicio 1 - Bloque 3 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";


session_start();

//  -----  Creamos la sesión si no existe  -----
if (!isset($_SESSION['numero'])) $_SESSION['numero'] = 0;

//  -----  si hay parametro counter en la url  -----
if (isset($_GET['counter']) && $_GET['counter'] == 1) $_SESSION['numero']++;

if ($_SESSION['numero'] > 0) {
    if (isset($_GET['counter']) && $_GET['counter'] == 0) $_SESSION['numero']--;
}



?>

<h3> E valor de la sesión numero es: <?= $_SESSION['numero'] ?> </h3>
<br> <a href="ejercicio01.php?counter=1"> Aumentar </a> <br>
<a href="ejercicio01.php?counter=0"> Disminuir </a>