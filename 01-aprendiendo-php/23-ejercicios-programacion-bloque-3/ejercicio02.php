<?php
//  ***************************************************************************
//  **********  23-ejercicios-programacion-bloque-3/ejercicio02.php  **********
//  ***************************************************************************
?>

<html>
<title> 23 - Ejercicio02 - Bloque 3 Programación PHP </title>

</html>


<?php

//  ----------  EJERCICIO 2 - BLOQUE 2 PROGRAMACIÓN EN PHP  ------------------
//  -  1.  Una función.
//  -  2.  Validar un email con filter_var.
//  -  3.  Recoger una variable por get y validarla.
//  -  4.  Mostrar el resultado.
//  --------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 23 - Ejercicio 2 - Bloque 3 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";


function validar_email($email)
{
    $status = "No Valido.";

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) $status = "Valido.";
    return $status;
}


if (isset($_GET['email'])) echo "<h3>" .validar_email($_GET['email']) ."</h3>";
else echo "<h3> Pasa por get un email </h3>";



?>