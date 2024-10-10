<?php
//  ***************************************************
//  **********  22-subir-archivos/index.php  **********
//  ***************************************************
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 22- Subir Archivos al Servidor en PHP </title>

    <style>
        .hola {
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center"> ---------- 22- Subir Imagenes al Servidor en PHP ---------- </h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">

        <!-- <label for="nombre"> Nombre: </label> -->
        <input type="file" name="archivo"> <br> <br>
        <input type="submit" value="Enviar">

    </form>


    <?php
    // Abre el directorio 'images'
    $gestor = opendir('./images');

    if ($gestor) {

        echo "<h2> Listado de mis Imágenes </h2>";

        echo "<div style='
                display: flex; 
                flex-direction: row; 
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                gap: 10px;
            '> 
        ";


        //  -----  Recorre el directorio para listar los archivos  -----
        while (($image = readdir($gestor)) !== false) {

            //  -----  Ignora los directorios especiales '.' y '..'  -----
            if ($image != '.' && $image != '..') echo "<img src='images/$image' width='200px' height='200px' alt='$image' />";
        }

        echo "</div>";

        //  -----  Cierra el gestor del directorio  -----
        closedir($gestor);
        
    } else echo "<p>No se puede abrir el directorio 'images'.</p>";


    ?>


</body>

</html>