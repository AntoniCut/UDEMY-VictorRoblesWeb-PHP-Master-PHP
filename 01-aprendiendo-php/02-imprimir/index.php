<html>
    <title> 02- Imprimir </title>
</html>

<?php
    //  *****************************************************
    //  **********  02-imprimir  -----  index.php  **********
    //  *****************************************************
?>


<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset=utf-8">
    <title> 02 - Imprimir por pantalla - Master en PHP </title>
</head>    

<body>

    <h1> Master en PHP - <?php echo "victorroblesweb.es";  ?> </h1>

    <?php echo 'Bienvenido al curso mas grande de PHP <br>' ?>
    <?= "Bienvenido al curso mas grande de PHP " ?>


    <!--  Aqui Empieza el Código de PHP  -->
    <?php
        
        //  Titular de la Seccion.
        echo "<h3> Listado de Videojuegos </h3>";
        
        /*  Esta es una lista de Videojuegos Modernos.  */
        
        echo '<ul>'
                .'<li> GTA </li>'
                .'<li> Fifa </li>'
                .'<li> Mario Bros </li>'
              .'</ul>';
        
        echo '<br> HOLA HOLA HOLA <br>';
        
        /*  Parrafo expicativo  */
        echo '<p> Esta es Toda' .' - ' .'Lista de juegos </p>';
    
    ?>  <!--  Aqui Termina el Código de PHP  -->

</body>

</html>





