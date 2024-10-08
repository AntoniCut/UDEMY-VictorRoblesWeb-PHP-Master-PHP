<?php
//  ************************************************
//  **********  16-sesiones/pagina_1.php  **********
//  ************************************************
?>


<html>
<title> 16 - Página 1 - Sesiones en PHP </title>

</html>


<?php


echo '<hr><h1 style="text-align: center"> ---------- 16 - Página 1 - Sesiones en PHP ---------- </h1>';


session_start();
echo $variable_normal;  //  da error.
echo $_SESSION['variable_persistente'];


echo "<br><br><br><br><hr>";


?>