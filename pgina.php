<html>
<link rel="icon" type="image/png" href="images/cajas/bank-building.ico" />
<head>
<title>Listado Turnos Admin</title>
</head>
 <!-- HOJA DE ESTILOS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-frontpage.css" rel="stylesheet">
	<link href="css/css-table.css" rel="stylesheet">
	
<body>


<div align="center"><h3>LISTADO TURNOS</h3></div>

<?php
$con = mysql_connect("localhost","root","Admin") or die (mysql_error()); 
mysql_select_db("turnos",$con) or die (mysql_error()); 
if (isset($_REQUEST['pos']))
  $inicio=$_REQUEST['pos'];
else
  $inicio=0;
$registros=mysql_query("select * from num_turno limit $inicio,10",$con) or
  die("Problemas en el select:".mysql_error($con));
$impresos=0;
while ($reg=mysql_fetch_array($registros))
{
  $impresos++;
 
 echo "<table id='travel'>

	
    
    <thead>    
    	<tr>
            <th scope='col' rowspan='2'>{$reg['numero']}{$reg['letra']}</th>
            <th scope='col' >Caja</th>
			<th scope='col' >Estado</th>
			<th scope='col' >Fecha Turno</th>
			<th scope='col' >Solicitado</th>
			<th scope='col' >Atendido</th>
			<th scope='col' >Finalizado</th>
        </tr>
        
        <tr>
            
            <th scope='col'>{$reg['caja']}</th>
            <th scope='col'>{$reg['estado']}</th>
            <th scope='col'>{$reg['fecha_turno']}</th>
            <th scope='col'>{$reg['hora_solicitado']}</th>
			<th scope='col'>{$reg['hora_atendido']}</th>
			<th scope='col'>{$reg['hora_finalizado']}</th>
        </tr>        
    </thead>
  </table>";
  
  
  
  
  
}
if ($inicio==0)
  echo "";
else
{
  $anterior=$inicio-10;
  echo "<a href=\"pgina.php?pos=$anterior\" style='float: left; text-decoration:none'> <b> < Anterior </b></a>";
}
if ($impresos==10)
{
  $proximo=$inicio+10;
  echo "<a href=\"pgina.php?pos=$proximo\" style='float: right; text-decoration:none'> <b> Siguiente > </b> </a>";
}
else
  echo "";
mysql_close($con);
?>

</body>
</html>
