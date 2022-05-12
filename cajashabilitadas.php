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
	
	<title>Cajas</title>
	
    <!-- HOJA DE ESTILOS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/business-frontpage.css" rel="stylesheet">
	
	<!-- JAVASCRIPTs -->
	<script src="js/jquery.js" type="text/javascript"></script>
	
    
	
</head>

<body>
	
    <div class="container">

        <hr>
        <h1 class="tagline" align="center">Seleccione caja:</h1>
		
		<hr>
		
		
        <div class="row">

			<div class="col-sm-4">
				
				<form method="post" action="selcaja_1_esconde.php">
					<input name="button" type=image class="img-circle img-responsive img-center" src="images/cajas/Number_one_in_a_circle_256.png" value="" id=""> </input>
					<font color=#9CA0AC><h3 align="center">CAJA NUMERO 1</h3></font>
                </form>
            </div>
			
			<div class="col-sm-4">
			
				<form method="post" action="selcaja_2_esconde.php">
					<input name="button" type=image class="img-circle img-responsive img-center" src="images/cajas/Number_two_in_a_circle_256.png" value=""  id=""> </input>
					<font color=#9CA0AC><h3 align="center">CAJA NUMERO 2 </h3></font>
                </form>
            </div>
          
            <div class="col-sm-4">
				<form method="post" action="selcaja_3_esconde.php">
					<input name="button" type=image class="img-circle img-responsive img-center" src="images/cajas/Number_three_in_a_circle_256.png" value="" id=""> </input>
					<font color=#9CA0AC><h3 align="center">CAJA NUMERO 3</h3></font>
                </form>
            </div>
			
		</div>
			<hr>
			<div id="respuesta" align="center"></div>
			<a align="center" href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
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