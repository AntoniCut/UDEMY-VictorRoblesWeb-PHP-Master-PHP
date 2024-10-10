<?php
//  *********************************************
//  **********  20-ficheros/index.php  **********
//  *********************************************
?>


<title> 20 - Sistema de Ficheros en PHP </title>


<?php

echo '<h1 style="text-align: center"> ---------- 20 - Sistema de Ficheros en PHP ---------- </h1>';


//  ----------  ABRIR FICHEROS  ----------

//  -----  Abrir un fichero en modo de lectura 'r' y 'a+' permisos de escritura y lectura  -----
$archivo = fopen("fichero_texto.txt", "a+");


//  ----------  LEER FICHEROS  ----------

//  -----  Leer contenido del archivo  -----
while( !feof($archivo)) {
    
    $contenido = fgets($archivo);
    echo $contenido ."<br>";
}


//  ----------  ESCRIBIR FICHEROS  ----------

//  -----  Escribir en un archivo  -----
fwrite($archivo, "\n Soy un texto metido desde php");


//  -----  Leer contenido del archivo  -----
while( !feof($archivo)) {
    
    $contenido = fgets($archivo);
    echo $contenido ."<br>";
}


//  ----------  CERRAR FICHEROS  ----------
fclose($archivo);


//  ----------  COPIAR FICHEROS  ----------
copy('fichero_texto.txt', 'fichero_copiado.txt') or die('error copiar');


//  ----------  RENOMBRAR FICHEROS  ----------
rename('fichero_copiado.txt', 'fichero_renombrado.txt') or die('error renombrar');


//  ----------  ELIMINAR FICHEROS  ----------
unlink('fichero_renombrado.txt') or die('error renombrar');


//  ----------  EXISTE FICHERO ?????  ----------
if(file_exists('fichero_renombrado.txt')) echo "<br><br>El Archivo Existe";
else echo "<br><br>El Archivo No Existe";




















?>
    
    
    