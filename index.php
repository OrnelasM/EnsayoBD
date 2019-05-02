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
		<tbody>
			
			<?php while($resultado->fetch_array(MYSQL_ASSOC)) {?>
			<tr>
			<td><?php echo $row['ID']; ?></td>
			<td><?php echo $row['nombre']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><a href="modificar.php?ID=<?php echo $row['ID']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><a href="#" data-href="eliminar.php?ID=<?php echo $row['ID']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></td>
			</tr>
				<?php }?>
		</tbody>

	</table>
	</div>
	<script>
		$('#confirm-delete').on('show.bs.modal', function(e) {
			$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

			$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
		});

	</script>


</body>
</html>