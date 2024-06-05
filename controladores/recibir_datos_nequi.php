<?php
//paso 1: importar la libreria
    require "../Config/conexion2.php";

//paso 2 almacenar las variables

$documento = $_POST ["documento"];
$nombre = $_POST ["nombre"];
$fecha_nacimiento = ["fecha_nacimiento"];
$valor_cuenta = ["valor_cuenta"];
$numero = ["nro_telefono"];


//paso 3 armar el sql en una variable

$sql_borrar = "INSERT INTO registronequi
( fecha_sys, documento, nombre, fecha_nacimiento, valor_cuenta, celular) 
VALUES (now(), ".$documento.", ".$nombre.", ".$fecha_nacimiento.", ".$valor_cuenta.", ".$numero.")";

//paso 4: enviar a la BD1

if($dbh->query($sql_borrar))
{

   echo "Persona borrada correctamente";

}else
{

    echo "Error borrando la persona";

}

?> 