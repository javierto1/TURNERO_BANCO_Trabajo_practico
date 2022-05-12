<?php
//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "root"; 
$bd_password = "Admin"; 
$bd_base = "turnos"; 

$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 

mysql_select_db($bd_base, $con); 

//resetear turnero

$sql=mysql_query("truncate num_turno" ,$con);
sleep(1);
echo '<script language="javascript">alert("TURNERO RESETEADO CORRECTAMENTE");</script>';

//muestra los datos consultados


	


?>

