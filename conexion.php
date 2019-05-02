<?php

	$conexion = new mysqli("localhost","root","password","personal");

	if ($conexion) {
		echo "Conexión Exitosa";
	}
	else {
		echo "No se pudo conectar al sistema";
	}

?>