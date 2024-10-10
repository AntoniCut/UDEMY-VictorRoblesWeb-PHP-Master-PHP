<?php
//  *********************************************************
//  **********  22-subir-archivos/uploadindex.php  **********
//  *********************************************************
?>


<?php

// Verifica si el archivo ha sido subido correctamente
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === 0) {

    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    $tmp_name = $archivo['tmp_name'];

    echo "<pre>";
    var_dump($archivo);
    echo "</pre>";

    //  -----  Validar el tipo MIME  -----
    if ($tipo === "image/jpeg" || $tipo === "image/png" || $tipo === "image/gif") {

        //  -----  Crear la carpeta si no existe  -----
        if (!is_dir('images')) mkdir('images', 0777, true); // El tercer parámetro true es para crear directorios recursivamente si fuera necesario
        

        //  -----  Mover el archivo a la carpeta 'images'  -----
        if (move_uploaded_file($tmp_name, 'images/' . $nombre)) {
            echo "<h3>Imagen subida correctamente a 'images/$nombre'</h3>";
            header("Refresh: 5, URL = index.php");
        } else {
            echo "<h3>Error al subir la imagen</h3>";
            header("Refresh: 5, URL = index.php");
        }
    } else {
        echo "<h3>Sube una imagen con un formato válido (JPEG, PNG o GIF).</h3>";
        header("Refresh: 5, URL = index.php");
    }
} else {
    echo "<h3>No se ha subido ningún archivo o ha ocurrido un error.</h3>";
    header("Refresh: 5, URL = index.php");
}


?>





