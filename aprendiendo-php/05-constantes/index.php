<html>
    <title> 05- Constantes </title>
</html>

<?php

//  *******************************************************
//  **********  05-constantes  -----  index.php  **********
//  *******************************************************

//  Constantes.
//  Es un contenedor de informacion que no puede variar.

define('nombre', 'Antonio Cutillas');
define('web', 'victorroblesweb.es');

$web = "hola";
echo '<h3>'.$web.'</h3>';

echo '<h1>'.nombre.'</h1>';
echo '<h2>'.web.'</h2>';

//web = 'hola mundo';

//  Constantes Predefinidas.
echo '<br>'.'Versión de PHP: '.PHP_VERSION;
echo '<br>'.'S.O.: '.PHP_OS;
echo '<br>'.'Ubicación Extensiones de PHP Instaladas: '.PHP_EXTENSION_DIR;
echo '<br>'.'Nº de linea de impresion: '.__LINE__;
echo '<br>'.'Ruta de este fichero: '.__FILE__;

function holaMundo() {
    echo '<br>'.'Dentro de la Función: '.__FUNCTION__;
}

holaMundo();


?>