<?php

include("cnx.php");
//$letra = $_GET['letra'];

//se puede cambiar el formato de vista de hora, lo ideal seria que te tome el fecha y hora de la bd
$hora= date('H:i:s');
$fecha= date('Y-m-d');

//function registrar($_GET){
$letra = $_GET['letra'];
		if(isset($letra)){
				global $cnx;
					$query = mysql_query ("SELECT MAX(numero) AS ultimo FROM num_turno WHERE letra = '".$letra."' LIMIT 1",$cnx);
					$cant = mysql_num_rows($query);
					$numero = mysql_fetch_array($query,$cnx);
					$numerof = $numero['ultimo'];
					if ($numerof == ""){
					mysql_query ("INSERT INTO num_turno(numero,letra,hora_solicitado,fecha_turno) VALUE (1,'{$letra}','{$hora}','{$fecha}')", $cnx);
						echo ("Turno: ".$letra."1".$numerof." "."  Hora solicitado: ".$hora."");
					
						}
					else{
						$numerof++;
						mysql_query ("INSERT INTO num_turno(numero,letra,hora_solicitado,fecha_turno) VALUE({$numerof},'{$letra}','{$hora}','{$fecha}')", $cnx);
						echo ("Turno: ".$letra.$numerof."  "."   Hora solicitado: ".$hora."");
					
						}		
					
					
}
return $numerof;

?>
