<?php

//  **********************************************************************
//  **********  07-Variables Superglobales  -----  recibir.php  **********
//  **********************************************************************


echo "<h1>" .$_GET['nombre'] ." </h1>";
echo "<h1>" .$_GET['apellidos'] ." </h1>";
echo "<h1>" .$_GET['web'] ." </h1>";

var_dump($_GET);
 
/*

echo "<h1>" .$_POST['nombre'] ." </h1>";
echo "<h1>" .$_POST['apellidos'] ." </h1>";
echo "<h1>" .$_POST['web'] ." </h1>";

var_dump($_POST);
*/

?>