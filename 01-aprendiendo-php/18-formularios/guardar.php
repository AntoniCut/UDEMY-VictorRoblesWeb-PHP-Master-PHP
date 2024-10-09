<?php
//  **************************************************
//  **********  18-formularios/guardar.php  **********
//  **************************************************
?>

<title> 18 - Guardar Datos en PHP </title>


<?php

    echo "<h1> Datos recibidos desde el formulario... </h1>";

if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {

    echo "<h3> Título: " .$_POST['titulo'] ."</h3>";
    echo "<h3> Descripción: " .$_POST['descripcion'] ."</h3>";

}




?>