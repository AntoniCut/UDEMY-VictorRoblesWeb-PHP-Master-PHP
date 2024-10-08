<?php
//  *********************************************
//  **********  16-sesiones/index.php  **********
//  *********************************************
?>


<html>
<title> 16 - Sesiones en PHP </title>

</html>


<?php


//  ----------  SESIONES  ---------------------------------------------------------
//  -  Almacenar y persistir datos del usuario mientras que navega en un sitio web
//     hasta que sierra sesión o cierra el navegador.
//  -------------------------------------------------------------------------------


echo '<hr><h1 style="text-align: center"> ---------- 16 - Sesiones en PHP ---------- </h1>';


//  -----  Iniciar sesión  -----
session_start();

//  -----  Variable Local  -----
$variable_normal = 'Soy una cadena de texto';

//  -----  Variable de sesion  -----
$_SESSION['variable_persistente'] = "Hola, soy una sesión activa";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente'];


echo "<br><br><br><br><hr>";


?>