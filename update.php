<?php

	require 'conexion.php';

	$ID = $_POST['ID'];
  $nombre = $_POST['nombre'];
	$email = $_POST['email'];

	$sql="UPDATE personal SET nombre='$nombre', email='$email' WHERE ID= '$ID'";
	$resultado=$mysqli->query($sql);

  ?>

  <!DOCTYPE html>
  <html lang="es">
  <head>
  	<title></title>
  	<meta name="viewport" content="width=device-width initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script type="js/jquery-3.4.0.min.js"></script>
	<script type="js/bootstrap.min.js"></script>
  </head>
  <body>
  
  	<div class="container">
  		<div class="row">
  		<div class="row" style="text-align: center;">
  		<?php if($resultado)	{ ?>
  			<h3>Registro Modificado</h3>
  		<?php } else { ?>
  			<h3>Error al Modificado
        </h3>
  		<?php } ?>

  		<a href="index.php" class="btn btn-primary">Regresar</a>

  		</div>
  		</div>
  	</div>

  </body>
  </html>