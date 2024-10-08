<?php
//  *******************************************************
//  **********  17-cookies/eliminar_cookies.php  **********
//  *******************************************************

// Definir el path (ruta) y domain (dominio) si los usaste al crear la cookie
$path = "/";
$domain = ""; // Puedes especificar el dominio si fue definido al crear la cookie

// -----  Eliminar las cookies antes de cualquier salida -----
if (isset($_COOKIE['mi_cookie'])) {
    // Eliminar la cookie con el path y dominio correctos
    setcookie('mi_cookie', '', time() - 100, $path, $domain);
}

if (isset($_COOKIE['un_year'])) {
    // Eliminar la cookie con el path y dominio correctos
    setcookie('un_year', '', time() - 100, $path, $domain);
}
?>

<html>

<head>
    <title>17 - Eliminar Cookies - Cookies en PHP</title>
</head>

<body>
    <hr>
    <h1 style="text-align: center"> ---------- 17 - Eliminar Cookies en PHP ---------- </h1>

    <?php
    // Mostrar mensajes de eliminación
    if (isset($_COOKIE['mi_cookie'])) {
        echo "<h1> Cookie - mi_cookie eliminada </h1>";
    } else {
        echo "<h3> No existe la Cookie mi_cookie </h3>";
    }

    if (isset($_COOKIE['un_year'])) {
        echo "<h1> Cookie - un_year eliminada </h1>";
    } else {
        echo "<h3> No existe la Cookie un_year </h3>";
    }

    //  -----  redirige a ver_cookies.php  -----
    header('location:ver_cookies.php');
    
    ?>

    <!-- Enlace para ver cookies -->
    <a href="ver_cookies.php"> Ver las Galletas </a>
    <br><br><br><br>
    <hr>
</body>

</html>