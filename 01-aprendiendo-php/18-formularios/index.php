<?php
//  ************************************************
//  **********  18-formularios/index.php  **********
//  ************************************************
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 18 - Formularios en PHP </title>
</head>

<body>

    <hr>
    <h1 style="text-align: center"> ---------- 18 - Formularios en PHP ---------- </h1>
    <hr><br><br>

    <form action="" method="POST" enctype="multipart/form-data">

        <label for="idUser"> ID Usuario: </label>
        <input type="hidden" id="idUser" name="idUser"> <br> <br>

        <label for="nombre"> Nombre: </label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre..." value="Introduce tu Nombre"
            minlength="4" maxlength="40" pattern="[A-Z a-z]+" autofocus required> <br> <br>

        <label for="apellidos"> Apellidos: </label>
        <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos..." value="Introduce tus Apellidos"
            minlength="4" maxlength="40" pattern="[A-Z a-z]+" required> <br> <br>

        <label for="correo"> Email: </label>
        <input type="email" id="correo" name="correo"> <br> <br>

        <label for="contrasena"> Contraseña: </label>
        <input type="password" id="contrasena" name="contrasena"> <br> <br>

        <label for="sexo"> ----------  Sexo  ------------ </label> <br>
        Hombre: <input type="checkbox" name="sexo" value="Hombre" checked>
        Mujer: <input type="checkbox" name="sexo" value="Mujer"> <br> <br>

        <label for="telefono"> Telefono: </label>
        <input type="tel" name="telefono"> <br> <br>

        <label for="fecha"> Fecha Nacimiento: </label>
        <input type="date" name="fecha"> <br> <br>

        <label for="web"> Web: </label>
        <input type="url" name="Web"> <br> <br>

        <label for="descripcion"> Descripción: </label> <br>
        <textarea> </textarea> <br> <br>
        
        <label for="boton"> Botón: </label>
        <input type="button" id="boton" name="boton" value="Click me!!!"> <br> <br>

        <label for="peliculas"> -----  Peliculas  ----- </label> <br>
        <select name="peliculas">
            <option value="Spiderman"> Spiderman </option>
            <option value="Batman"> Batman </option>
            <option value="La Jungla de Cristal"> La Jungla de Cristal </option>
            <option value="Gran Torino"> Gran Torino </option>
        </select>
        <br> <br>


        <label for="continente"> ----------  Continentes  ------------------------------------------------------------ </label> <br>
        Europa <input type="radio" name="continente" value="Europa" checked>
        America <input type="radio" name="continente" value="America">
        Asia <input type="radio" name="continente" value="Asia">
        África <input type="radio" name="continente" value="África">
        Antartida <input type="radio" name="continente" value="Antartida">
        Australia <input type="radio" name="continente" value="Australia"> <br> <br>
        
        <label for="color"> Color: </label>
        <input type="color" name="color"> <br> <br>
        
        <label for="numero"> Número: </label>
        <input type="number" name="numero"> <br> <br>

        <label for="archivo"> Archivo: </label>
        <input type="file" id="archivo" name="archivo" multiple> <br> <br>

        <input type="submit" value="Enviar">

    </form>

</body>

</html>
