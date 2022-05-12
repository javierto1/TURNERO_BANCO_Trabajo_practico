<?php

include("cnx.php");
mysql_select_db("turnos");
$caja = $_GET['caja'];

//$caja="3"; //la paso en duro al valor de la caja para probarla pero tenemos q usar la variable q esta comentada arriba besis!

		if(isset($caja)){
			$consulta=("SELECT MIN(id_num_turno) AS primero FROM num_turno WHERE estado='pendiente'  AND caja is null" );
					global $cnx,$caja;
					$sql=mysql_query($consulta);
					$cant = mysql_num_rows($sql);
					$turno = mysql_fetch_array($sql,$cnx);
					$turnof = $turno['primero'];
					if ($error === $turnof ){ echo "NO HAY TURNOS PARA ASIGNAR";					
					}else{ 
					$sql1=("UPDATE num_turno SET caja=".$caja.", hora_atendido='".date('H:i:s')."' WHERE id_num_turno=".$turnof." ");
					mysql_query($sql1 ,$cnx);
					$c=mysql_query("select numero, letra from num_turno where id_num_turno='$turnof'");
					while ($r=mysql_fetch_array ($c))
					
					echo ("TURNO: ".$r["letra"]." ".$r["numero"]." "."Por caja: ".$caja." Hora: ".date('H:i:s'));
						
						}
					
			}
return $turnof;
?>

