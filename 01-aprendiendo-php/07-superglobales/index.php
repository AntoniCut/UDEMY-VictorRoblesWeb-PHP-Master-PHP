<html>
    <title> 07- Variables Superglobales </title>
</html>

<?php

//  ********************************************************************
//  **********  07-Variables Superglobales  -----  index.php  **********
//  ********************************************************************
//  ***** VARIABLES SUPERGLOBALES  *****

//  Variables de Servidor.

//  saca la direccion ip de mi servidor local - localhost.
echo 'Saca la dirección IP de mi servidor local - localhost: '.'<h1>'.$_SERVER['SERVER_ADDR'].'</h1>';       

//  saca el dominio que tenga la ip de mi servidor local - localhost.
echo 'Saca el dominio que tenga la dirección IP de mi servidor local - localhost: '.'<h1>'.$_SERVER['SERVER_NAME'].'</h1>';

//  saca la herramienta como servidor web local - localhost.
echo 'Saca la herramienta como servidor web local - localhost: '.'<h1>'.$_SERVER['SERVER_SOFTWARE'].'</h1>';

//  saca el navegador web.
echo 'Saca el navegador web: '.'<h1>'.$_SERVER['HTTP_USER_AGENT'].'</h1>';

//  saca la direccion ip de mi cliente.
echo 'Saca la dirección IP de mi cliente: '.'<h1>'.$_SERVER['REMOTE_ADDR'].'</h1>';


?>