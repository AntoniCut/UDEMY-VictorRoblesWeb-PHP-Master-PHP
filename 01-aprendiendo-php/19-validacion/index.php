<?php
//  ***********************************************
//  **********  19-validacion/index.php  **********
//  ***********************************************
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 19 - Validación de Formularios en PHP </title>
</head>

<body>

    <hr>
    <h1 style="text-align: center"> ---------- 19 - Validación de Formularios en PHP ---------- </h1>
    <hr><br><br>

    <?php

    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error === 'faltan_valores') echo '<h3 style="color: red"> Introduce todos los datos en todos los campos del formulario </h3>';
        if ($error === 'nombre') echo '<h3 style="color: red"> Introduce el Nombre correctamente </h3>';
        if ($error === 'apellidos') echo '<h3 style="color: red"> Introduce los Apellidos correctamente </h3>';
        if ($error === 'edad') echo '<h3 style="color: red"> Introduce la edad correctamente </h3>';
        if ($error === 'email') echo '<h3 style="color: red"> Introduce el email correctamente </h3>';
        if ($error === 'password') echo '<h3 style="color: red"> Introduce el password de mas de 5 caracteres </h3>';
    } else {
        $_POST['nombre'] = "";
        $_POST['apellidos'] = "";
        $_POST['edad'] = "";
        $_POST['email'] = "";
        $_POST['pass'] = "";
    }

    ?>

    <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">

        <label for="nombre"> Nombre: </label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre..."> <br> <br>

        <label for="apellidos"> Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos..."> <br> <br>

        <label for="edad"> Edad: </label>
        <input type="text" name="edad"> <br> <br>

        <label for="email"> Email: </label>
        <input type="text" name="email"> <br> <br>

        <label for="pass"> Contraseña: </label>
        <input type="text" name="pass"> <br> <br>

        <input type="submit" value="Enviar">

    </form>


    <!-- <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">

        <label for="nombre"> Nombre: </label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre..." required pattern="[A-Z a-z]+"> <br> <br>

        <label for="apellidos"> Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos..." required pattern="[A-Z a-z]+"> <br> <br>

        <label for="edad"> Edad: </label>
        <input type="number" name="edad" pattern="[0-9]+"> <br> <br>

        <label for="email"> Email: </label>
        <input type="email" name="email" required> <br> <br>

        <label for="pass"> Contraseña: </label>
        <input type="password" name="pass" required> <br> <br>

        <input type="submit" value="Enviar">

    </form> -->

</body>

</html>