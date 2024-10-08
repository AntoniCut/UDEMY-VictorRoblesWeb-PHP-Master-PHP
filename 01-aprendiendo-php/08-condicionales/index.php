<html>
    <title> 08 - Condicionales</title>
</html>

<?php

//  **********************************************************
//  **********  08-Condicionales  -----  index.php  **********
//  **********************************************************


//      **********  CONDICIONALES  **********

/*
    if(condicion) {
         instrucciones . . .
    } else {
         otras instrucciones . . .
    }
*/

//      **********Operadores de Comparacion  **********

//      ==    igual
//      !=    diferente
//      <>    diferente
//      !==   no identico
//      <     menor que
//      >     mayor que
//      <=    menor o igual que
//      >=    mayor o igual que
 

//      **********Operadores Logicos  **********

//      &&  AND  Y
//      ||  OR   O
//      !   NOT  No
//      and, or

//  *****  Ejemplo1 IF  *****

$color = "verde";
if($color == "rojo") {
    echo "El color es rojo";
}else {
    echo"El color No es rojo";
}
echo "<br>";


//  *****  Ejemplo 2 IF  *****

$year = 2028;
if($year < 2019) {
    echo "Es un año anterior a 2019";
} else {
    echo"Es un año posterior a 2019";
}
echo "<br>";


//  *****  Ejemplo 3 IF  *****

$nombre = "David Extremadura";
$edad = 10;
$mayoria_edad = 18;
$ciudad = "Madrid";
$continente = "Asia";

if($edad >= $mayoria_edad) {
    
    echo "<h3> $nombre es mayor de edad </h3>";
    
    if($continente == "Europa") {
        echo "<h4> y es de $ciudad </h4>";
    }
    else { 
        echo "<h4> No es Europeo </h4>";
    }
    
}else {
    echo "<h3> $nombre no es mayor de edad </h3>";
}

echo "<br><hr><br>";


//  *****  Ejemplo 4 - if anidados  *****

$dia = 5;

if($dia == 1) {
    echo "Es Lunes";
}else {
    if($dia == 2) {
        echo "Es Martes";
    }else {
        if($dia== 3) {
            echo "Es Miercoles";
        }else {
            if($dia == 4) {
                echo "Es Jueves";
            }else {
                if($dia == 5) {
                    echo "Es Viernes";
                }else {
                    if($dia == 6) {
                        echo "Es Sabado";
                    }else {
                        if($dia == 7) {
                            echo "Es Domingo";
                        }else {
                            echo "No es ningun dia de la semana";
                        }
                    }
                }
            }
        }
    }
}

echo "<br><hr><br>";


//  *****  Ejemplo 5 - elseif  *****

$dia = 5;

if($dia == 1) {
    echo "Lunes";
}elseif($dia ==2) {
    echo "Martes";
}elseif($dia ==3) {
    echo "Miercoles";
}elseif($dia ==4) {
    echo "Jueves";
}elseif($dia ==5) {
    echo "Viernes";
}elseif($dia ==6) {
    echo "Sabado";
}elseif($dia ==7) {
    echo "Domingo";
}else {
    echo "No es ningun dia de la semana";
}

echo "<br><hr><br>";

//  Ejemplo 6 - operadores logicos con IF.

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 65;

if($edad_oficial >= $edad1 && $edad_oficial < $edad2) {
    echo "Tienes que trabajar";
}else {
    echo "No esta en edad de trabajar";
}

echo "<br><hr><br>";


//  *****  Ejemplo 7 - operadores logicos con IF  *****

$pais = "Francia";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla Español";
}else {
    echo "No se habla Español";
}

echo "<br><hr><br>";


//  *****  Ejemplo 8 -  SWITCH  *****

$dia = 4;

switch($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "Dia Erroneo";
        break;
}


echo "<br><hr><br>";


//  *****  Ejemplo 9 -  GOTO  *****

goto marca;
echo "<h3> Instruccion 1 </h3>";
echo "<h3> Instruccion 2 </h3>";
echo "<h3> Instruccion 3 </h3>";
echo "<h3> Instruccion 4 </h3>";

marca:
echo "<h1> Me he saltado 4 echos </h1>";


?>