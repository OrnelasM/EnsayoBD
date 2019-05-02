<?php 

	require 'conexion.php';

	$ID = $_GET['ID'];

	$sql = "SELECT * FROM personal WHERE ID = '$ID";
 	$resultado = $mysqli->query($sql);
 	$row = $resultado->fecth array(MYSQL_ASSOC);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Nuevo</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script type="js/jquery-3.4.0.min.js"></script>
	<script type="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				<div>
					<input type="hidden" id="ID" name="ID" value="<?php echo $row['ID']; ?>">

				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
				
		</form>
		</div>	
</body>
</html>