<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
        $servidor = "localhost"; $usuario = "root"; $contrasena = ""; $bd = "cetis.food";
        $conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

        if($conexion->connect_error){ echo "Error al conectar a la Base de datos"; }

        $sql = "SELECT * FROM pago";
        $datos = $conexion->query($sql);
    ?>
	<div role="main" class="ui-content">
            <h2 style="text-align: center; color:orange">Canasta</h2><hr>
            <div class="" style="align-items: center">
                <?php
                    if ($datos->num_rows > 0) {
                ?>
                <table class="table table-hover" style="border: 2px solid gray; border-collapse: separate; align-content: center; text-align: center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Alimentos</th>
                            <th>numero de tarjeta</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($registro = $datos->fetch_assoc()){
                                echo "<tr>";
                                    echo "<td style='background-color:white'>".$registro["id_pago"]."</td>";
                                    echo "<td style='background-color:grey'>Combo Whoper más acompañamiento Gratis</td>";
                                    echo "<td style='background-color:white'>".$registro["numero_de_tarjeta"]."</td>";
                                   
                                   
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <?php } else { echo "<h1>No tienes productos en espera</h1>"; $conexion->close(); } ?>
            </div>

        </div>
       <a href="index.html"> <button class="btn btn-danger" type="submit">regresar</button></a>
</body>
</html>