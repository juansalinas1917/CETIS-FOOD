<?php ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Crea una cuenta</title>
</head


$conexion = mysqli_connect('localhost', 'root', '', 'cetis.food');
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-6 offset-sm-3">
				<h2>Crea una cuenta nueva</h2><hr>
				<form action="guardarProducto.php" method="POST">
					<div class="form-group">
						<label for="">Nombre:</label>
						<input type="text" name="nombre" placehoder="Teclea tu nombre" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Apellido:</label>
						<input type="text" name="nombre" placeholder="Teclea tu Apellido" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Precio:</label>
						<input type="text" name="precio" placeholder="Teclea tu correo electronico " class="form-control" required>
					</div>

					<div class="from-group">
						<label for="">Contrasena:</label>
						<input type="text" name="cantidad" placeholder="Teclea una contrasena" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="">Confirmar contrasena:</label>
						<input type="text" name="categoria" placeholder="confirma contrasena" class="form-control" required>
					</div>

					<div
                <<li class="nav-item">
                <a class="nav-link" href="index2.html">Registrate</a>
              
              </div>
              </li>

				</form>
			</div>
		</div>
	</div>
</body>
</html>