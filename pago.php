<?php 
	
	
	$numero_de_tarjeta = $_POST["numero_de_tarjeta"];
	$fecha_de_expiracion = $_POST["fecha_de_expiracion"];
	$cvv = $_POST["cvv"];
	



	$servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "cetis.food";
	$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

	if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

	$sql = "INSERT INTO pago (numero_de_tarjeta, fecha_de_expiracion, cvv) VALUES ('$numero_de_tarjeta', '$fecha_de_expiracion', '$cvv')";

	if($conexion->query($sql) === TRUE){		
		header('Location: index.html');
	
	}else{
		echo "Ocurrio un error: " . $conexion->error;
	}

 ?>