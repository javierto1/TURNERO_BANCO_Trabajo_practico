<?php

$host="localhost";
$user="root";
$pass="Admin";

$db="turnos";
$cnx=@mysql_connect ($host, $user, $pass);

@mysql_select_db($db, $cnx);

if ($cnx!="") { 
//echo "Sesion iniciada";
} else { echo "Ingreso denegado, consultar al administrador";}


?>

