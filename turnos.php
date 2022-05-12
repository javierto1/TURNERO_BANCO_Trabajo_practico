<!DOCTYPE html> 
<link rel="icon" type="image/png" href="images/cajas/bank-building.ico" />
<html>
	
<div align="center">
		<?php include ("cnx.php");?>	
</div>

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   
	
    <!-- HOJA DE ESTILOS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-frontpage.css" rel="stylesheet">
	
	<!-- JAVASCRIPTs -->
	<script src="js/jquery-1.11.3.js" type="text/javascript"></script> <!-- no sacar de aca estos script -->
    <script src="js/ready.js" type="text/javascript"></script>         <!-- no sacar de aca estos script -->
	
	<title>Turnero</title>
</head>
<body>
	
    <div class="container">

        <hr>
        <h1 class="tagline" align="center">¿Que acción desea realizar?</h1>
		<hr>
		
		
        <div class="row">

			<div class="col-sm-4">
                <input name="button" type=image class="img-circle img-responsive img-center" src="images/cajas/magnifier-cheque-256.png"  value="CUENTA CORRIENTE" id="CC" ></input>
                <h2 align="center">CUENTA CORRIENTE</h2>
                <p align="center">Caja de ahorro permite depositar cheques, adherir tu cuenta al débito automático. Realizar transferencias entre tus cuentas hacia otros bancos.</p>
            </div>
			<div class="col-sm-4" align="center">
			
            	<input name="button" type=image src="images/cajas/money-safe-box-256.png" value="CAJA DE AHORRO"  id="CA" >
                </input>
                <h2 align="center">CAJA DE AHORRO</h2>
                <p align="center">Cuenta que permite hacer ingresos o efectuar pagos directamente y disponer del dinero en metálico de forma inmediata</p>
            </div>
          
            <div class="col-sm-4">
          
                <input name="button" type=image class="img-circle img-responsive img-center" src="images/cajas/bitcoin-dollar-exchange-256.png" value="MONEDA EXTRANJERA" id="ME" >
                <h2 align="center">MONEDA EXTRANJERA</h2>
                <p align="center">Moneda extranjera permite realizar cambios de moneda locar a moneda extranjera, vendiendo y comprando los distintos tipos de monedas.</p>
            </div>
		</div>
			<hr>
			<font color=#14C49B><h4><i><div id="respuesta" align="center" class="divs"></div></i></h4></font>
			<a href="<?=$_SERVER["HTTP_REFERER"]?>">Atrás</a>
        	<hr>
			
			
        
		<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12" align="center">
                    <p>Trabajo Final Desarrollo 4 y 5 - 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>
<?php
?>
</html>
