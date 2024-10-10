<?php
//  ************************************************
//  **********  21-directorios/index.php  **********
//  ************************************************
?>


<title> 21 - Directorios en PHP </title>


<?php

echo '<h1 style="text-align: center"> ---------- 21 - Directorios en PHP ---------- </h1>';


//  ----------  CREAR DIRECTORIOS  ----------

//  -----  Crea una carpeta con todos los permisos, Si no existe la carpeta la crea  -----
if (!is_dir('mi_carpeta')) {
    mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
    echo "<br>La Carpeta ha sido creada<br><br>";
}else echo "<br>No se crea la carpeta porque ya estaba creada<br><br>";


//  ----------  ELIMINAR DIRECTORIOS  ----------
if (is_dir('mi_carpeta')) {
    rmdir('mi_carpeta') or die('No se puede eliminar la carpeta');
    echo "<br>La Carpeta ha sido eliminada<br><br>";
} else echo "<br>No se elimina la carpeta porque no existe<br><br>";


//  ----------  LEER DIRECTORIOS  ----------

echo "<br><br> Contenido de la carpeta 'mi_carpeta_contenido'<br><br>";
if($gestor = opendir('mi_carpeta_contenido')) {

    while( false !== ($archivo = readdir($gestor))) {
        
        if($archivo != '.' & $archivo != '..') echo "<br>$archivo";
    }
}


?>