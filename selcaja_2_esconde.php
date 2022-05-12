<html>
<link rel="icon" type="image/png" href="images/cajas/bank-building.ico" />
<?php
?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/business-frontpage.css" rel="stylesheet">
<link href="css/asignar_caja.css" rel="stylesheet">
<title>Caja 2</title>
<div align="center">
<?php 
include ("cnx.php"); 
?>	
</div>
		<script src="js/jquery-1.11.3.js" type="text/javascript"></script> <!-- no sacar de aca estos script -->
		<script src="js/ready_caja.js" type="text/javascript"></script><!-- no sacar de aca estos script -->
		<script src="js/ready_cerrar_caja.js" type="text/javascript"></script> 
		
		<div class="container" align="center">
					<div id="div1" class="divs">
						<h2 align="center"><b>Caja:</b> 2 </h2>
						<input name="button" type=image onclick="abrir()" class="img-circle img-responsive img-center" src="images/cajas/right_arrow-256.png"  value="1" id="2"></input>
						<h2 align="center">Siguiente Turno</h2>
					</div>

					<div class="divs1" style= "display:none; height:300px; width;300px" id="div3" class="divs" align="center">
						<input name="hola" type=image class="img-circle img-responsive img-center" src="images/cajas/close.png"  onclick="cerrar()" value="1" id="2"></input>
						<h3 align="center">Cerrar Turno</h3>
						<div id="respuesta" align="center" ></div>
						
					</div>
		</div>				
			
			<font color=#14C49B><i><div id="respuesta1" align="center" class="divs"></div></i></font>
			

<?php
?>
</html>