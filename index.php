<?php 
	require 'conexion.php';

	$where ="";

	$sql = "SELECT * FROM personal";
	$resultado = $mysqli->query($sql);

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>Desarrollo</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script type="js/jquery-3.4.0.min.js"></script>
	<script type="js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div class="row">
		
		<h2 style="text-align: center;">Prueba de sistema</h2>

	</div>

	<div class="row">
		<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
	</div>

	<br>

	<div class="row table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>	


			</tr>		
		</thead>
	</table>


</div>

</body>
</html>