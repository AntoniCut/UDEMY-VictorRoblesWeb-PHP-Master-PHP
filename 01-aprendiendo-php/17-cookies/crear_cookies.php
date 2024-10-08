<?php
//  ****************************************************
//  **********  17-cookies/crear_cookies.php  **********
//  ****************************************************
?>


<html>
<title> 17 - Crear Cookies en PHP </title>

</html>


<?php


//  ----------  COOKIES  ----------------------------------------------------
//  -  Es un fichero que se almacena en el ordenador del usuario que visita
//     la web, con el fin de recordar datos o rastrear el comportamiento del
//     mismo en la web.
//  -------------------------------------------------------------------------


echo '<hr><h1 style="text-align: center"> ---------- 17 - Crear Cookies en PHP ---------- </h1>';


//  -----  Crear una Cookie  -----
//  setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);


//  -----  Cookie basica  -----
setcookie("mi_cookie", "Valor_de_mi_galleta");

//  -----  Cookie con expiración de 1 año  -----
//setcookie("un_year", "valor de mi cookie de 365 dias", time() + (60 * 60 * 24 * 365));

setcookie('un_year', 'valor_de_cookie_un_year', time() + (365 * 24 * 60 * 60), "/");  // "/" hace que esté disponible en todas las rutas


//  -----  redirige a ver_cookies.php  -----
header('location:ver_cookies.php');


echo "<br><br><br><br><hr>";

?>