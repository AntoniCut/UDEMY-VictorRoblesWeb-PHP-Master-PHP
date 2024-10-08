<?php
//  **********************************************
//  **********  16-sesiones/logout.php  **********
//  **********************************************
?>


<html>
<title> 16 - Logout - Sesiones en PHP </title>

</html>


<?php


echo '<hr><h1 style="text-align: center"> ---------- 16 - Logout - Sesiones en PHP ---------- </h1>';


session_start();
echo $_SESSION['variable_persistente'];

//  -----  Cierro la sesión  -----
session_destroy();


echo "<br><br><br><br><hr>";


?>