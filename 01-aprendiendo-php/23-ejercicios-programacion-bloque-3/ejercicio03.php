<?php
//  ***************************************************************************
//  **********  23-ejercicios-programacion-bloque-3/ejercicio03.php  **********
//  ***************************************************************************
?>


<html>
<title> 23 - Ejercicio03 - Bloque 3 Programación PHP </title>
</html>


<?php

//  ----------  EJERCICIO 3 - BLOQUE 3 PROGRAMACIÓN EN PHP  ------------------
//  -  Hacer una interfaz de usuario (formulario) con 2 input y 4 botones :
//     sumar, restar, multiplicar y dividir.
//  --------------------------------------------------------------------------

echo '<hr><h1 style="text-align: center"> ---------- 23 - Ejercicio 3 - Bloque 3 Programación en PHP ---------- </h1>';
echo "<br><br><hr>";

$resultado = false;
$errorDiv = false; // Variable para controlar si ocurre una división por cero

if ( isset($_POST['numero1']) && isset($_POST['numero2'])) {

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if (isset($_POST['sumar'])) $resultado = 'El resultado de ' . $numero1 . ' + ' . $numero2 . ' = ' . ($numero1 + $numero2);
    if (isset($_POST['restar'])) $resultado = 'El resultado de ' . $numero1 . ' - ' . $numero2 . ' = ' . ($numero1 - $numero2);
    if (isset($_POST['multiplicar'])) $resultado = 'El resultado de ' . $numero1 . ' * ' . $numero2 . ' = ' . ($numero1 * $numero2);
    
    if (isset($_POST['dividir'])) {
        if ($numero2 == 0) {  // Comparación para ver si numero2 es 0
            $errorDiv = true;
        } else {
            $resultado = 'El resultado de ' . $numero1 . ' / ' . $numero2 . ' = ' . ($numero1 / $numero2);
        }
    }
}

?>

<h2> Calculadora </h2>

<form method="POST">

    <label> Numero 1: </label> <br>
    <input type="number" name="numero1" required> <br><br>

    <label> Numero 2: </label> <br>
    <input type="number" name="numero2" required> <br><br>

    <input type="submit" value="Sumar" name="sumar">
    <input type="submit" value="Restar" name="restar">
    <input type="submit" value="Multiplicar" name="multiplicar">
    <input type="submit" value="Dividir" name="dividir">

</form>

<br><br>

<?php
// Muestra el resultado si no hay error en la división
if ($errorDiv) : echo "<h3 style='color: red;'> No se puede dividir entre 0. </h3>";
elseif ($resultado) :  echo "<h3> $resultado </h3>";
else : echo "<h3> </h3>";
endif
?>

<br><br>
<hr>
