<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta Registro con AJAX</title>

<link href="../css/table.css" rel="stylesheet">


<?php
//Configuracion de la conexion a base de datos
$bd_host = "localhost"; 
$bd_usuario = "root"; 
$bd_password = "Admin"; 
$bd_base = "turnos"; 

$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 

mysql_select_db($bd_base, $con); 

//consulta todos los turnos

$sql=mysql_query("SELECT * FROM num_turno where estado ='pendiente' and caja is not null",$con); //not null separado y anda ! =)
sleep(1);
//muestra los datos consultados
//echo "</p>COD - NUM - CAJA - </p> \n";
while($row = mysql_fetch_array($sql)){
	echo	
			"<table align='center'> 
				<tr> 
					<td>TURNO </td><td>CAJA </td></tr>
					<tr>
					<td>{$row['numero']}{$row['letra']}</td>
					<td>{$row['caja']}</td>
				</tr>
			</table>";
	// echo rand();
	
}

?>

