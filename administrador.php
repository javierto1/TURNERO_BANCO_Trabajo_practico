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

   
	<title>Administrador</title>
	
    <!-- HOJA DE ESTILOS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-frontpage.css" rel="stylesheet">
	<!-- JAVASCRIPTs -->
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/ready_resetear.js" type="text/javascript"></script>

</head>

<body>
	
    <div class="container">

        <hr>
        <h1 class="tagline" align="center">Administrador</h1>
		<hr>
		
		
        <div class="row">

			<div class="col-sm-4">
                <input name="button" type=image class="img-circle img-responsive img-center" src="images/cajas/Cancel.png" value="RESETEAR TURNERO" id="id_num_turno"></input>
				<font color=#9CA0AC><h3 align="center">RESETEAR TURNERO</h3></font>
                <p align="center"></p>
            </div>
			<div class="col-sm-4" align="center">
				<a href="pgina.php"><img class="img-circle img-responsive img-center" src="images/cajas/More.png"></a>
                <font color=#9CA0AC><h3 align="center">LISTADO COMPLETO</h3></font>
                <p align="center"></p>
            </div>
            <div class="col-sm-4">
				<input type=image class="img-circle img-responsive img-center" src="images/cajas/More_Details.png"></input>
                <font color=#9CA0AC><h3 align="center">PROXIMAMENTE</h3></font>
                <p align="center"></p>
            </div>
		</div>
		
		<hr>
		<div id="respuesta" align="center"></div>
		<a href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a> 
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
