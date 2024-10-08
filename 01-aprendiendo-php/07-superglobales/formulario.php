<?php

//  *************************************************************************
//  **********  07-Variables Superglobales  -----  formulario.php  **********
//  *************************************************************************

?>

<!DOCTYPE HTML>

<html lang="es">

<head>
    <meta charset="utf-8" />
    <title> Formulario en PHP </title>
</head>

<body>
    
    <h1> Formulario en PHP </h1>

    <form method="get" action="recibir.php">
        
        <p>
            <label for="name"> Nombre </label> <br>
            <input type="text" name="nombre" />
         </p>

         <p>
             <label for="apellidos"> Apellidos </label> <br>
            <input type="text" name="apellidos" />
        </p>

        <p>
            <label for="web"> Web </label> <br>
            <input type="text" name="web" />
        </p>

        <br>
        <input type="submit" value="Enviar datos" />

    </form>




</body>


</html>