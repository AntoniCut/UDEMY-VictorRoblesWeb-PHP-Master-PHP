<?php
//  *********************************************************
//  **********  13-includes/includes/cabecera.php  **********
//  *********************************************************
?>


<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 13 - Includes en PHP </title>
</head>

<body>

    <?php $nombre = 'Antonio Francisco'; ?>

    <!--  **********  Cabecera  **********  -->
    <header class="cabecera">
        <h1> Includes en PHP </h1>
        <ul>
            <li> <a href="index.php"> Inicio </a> </li>
            <li> <a href="sobre_mi.php"> Sobre Mi </a> </li>
            <li> <a href="contacto.php"> Contacto </a> </li>
            <li> <a href="https://google.es" target="_blank"> Google </a> </li>
        </ul>
    </header>

    <?php var_dump($nombre); ?>

    <br>
    <hr>