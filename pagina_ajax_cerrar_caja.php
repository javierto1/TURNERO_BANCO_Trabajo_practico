<?php

include("cnx.php");
mysql_select_db("turnos");
$caja = $_GET['caja'];

//$caja="2"; //la paso en duro al valor de la caja para probarla pero tenemos q usar la variable q esta comentada arriba besis!



		if(isset($caja)){
		   $consulta=("SELECT MIN(id_num_turno) AS ultimo FROM num_turno WHERE estado='pendiente' AND caja='$caja'");
					global $cnx,$caja;
					$sql=mysql_query($consulta);
					$cant = mysql_num_rows($sql);
					$turno = mysql_fetch_array($sql,$cnx);
					$turnof = $turno['ultimo'];
					if ($error === $turnof ){ echo "No hay turnos pendientes";	
					}else { 
					$sql1=("UPDATE num_turno SET estado='finalizado',hora_finalizado='".date('H:i:s')."' WHERE id_num_turno=".$turnof." AND caja=".$caja." limit 1 ");
					mysql_query($sql1,$cnx); 
					$c=mysql_query("select numero, letra from num_turno where id_num_turno='$turnof'");
					while ($r=mysql_fetch_array ($c))
					
					echo ("TURNO TERMINADO: ".$r["letra"]." ".$r["numero"]." ");
					
					//echo ("Ultimo turno atendido: ".$turnof." Horario: ".date('H:i:s'));
							
						
						}
					}

return $turnof ;


		?>