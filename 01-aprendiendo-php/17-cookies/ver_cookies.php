<?php
//  **************************************************
//  **********  17-cookies/ver_cookies.php  **********
//  **************************************************
?>


<html>
<title> 17 - Ver Cookies - Cookies en PHP </title>

</html>


<?php


echo '<hr><h1 style="text-align: center"> ---------- 17 - Ver Cookies en PHP ---------- </h1>';


//  -----  $_COOKIE[]  -----
//  ----- Mostrar el Valor de las Cookies (superglobal $_COOKIE, que es un array asociativo)  -----


if (isset($_COOKIE['mi_cookie']))  echo "<h1>" . $_COOKIE['mi_cookie'] . "</h1>";
else echo "<h3> No existe la Cookie mi_cookie </h3>";

if (isset($_COOKIE['un_year']))  echo "<h1>" . $_COOKIE['un_year'] . "</h1>";
else echo "<h3> No existe la Cookie un_year </h3>";


//  -----  enlace a eliminar_cookies.php
echo '<a href="crear_cookies.php"> Crear las Galletas </a> <br><br>';
echo '<a href="eliminar_cookies.php"> Eliminar las Galletas </a>';


echo "<br><br><br><br><hr>";


?>