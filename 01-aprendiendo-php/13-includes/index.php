<?php
//  *********************************************
//  **********  13-includes/index.php  **********
//  *********************************************
?>


<!--  **********  Incluimos Cabecera  **********  -->
<?php

include './includes/cabecera.php';

//  -----  include_once  --  solo incluye el archivo una vez  -----
include_once './includes/cabecera.php';

?>

<!--  **********  Contenido Principal  **********  -->
<main class="content">

    <h2> Esta es la Página de Inicio </h2>
    <p> Texto de prueba de la página de inicio </p>

</main>

<br>
<hr>


<!--  **********  Incluimos Pie de Página  **********  -->
<?php 
require './includes/pie.php' ;

//  -----  igual que el include_once pero con require  -----
require_once './includes/pie.php'; 

?>