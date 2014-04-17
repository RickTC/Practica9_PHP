
<html>
<head><title>Indice</title></head>
<body>
<?php
require("conexionPractica8.php");
session_start();
	$resultado= mysqli_query($link, "SELECT * FROM productos");
	echo "<fieldset><legent><font size='5' color='blue'>Poductos</font></legent>";
	
		if (mysqli_num_rows($resultado) > 0){	
		echo "<table border='1'>
				<tr>
			 		<td><font size='3' face='Arial'>ID</font></td>
					<td><font size='3' face='Arial'>Clave</font></td>
					<td><font size='3' face='Arial'>Nombre</font></td>
					<td><font size='3' face='Arial'>Opciones</font></td>
				</tr>";
			
		while($row=mysqli_fetch_array($resultado)){

		echo "<tr>".
			 	"<td>".$row["id"]."</td>".
		 		"<td>".$row["clave"]."</td>".	
				"<td>".$row["nombre"]."</td>".
				"<td>"."<a href='formularioModificar.php?id=".$row["id"]."'>"."<img src='custom-reports-icon.png'/>"."</a>".
				"<a href='preguntaEliminar.php?id=".$row["id"]."'>"."<img src='delete-icon.png'/>"."</a>".
				"<a href='ver.php?id=".$row["id"]."'>"."<img src='Magnifying-Glass-icon.png'/>"."</a><"."/td>".
			 "<tr>";
		}
		echo "</table>";
		echo "</fieldset>";
		}
		else{
			echo "</br>No hay productos que listar";
		}
	 mysqli_close($link);
?>
	</br><input type="button" onclick=" location.href='formulario.php'" value="Nuevo" /></br>
	<a href="Cerrar.php">Cerrar Sesion</a>
</body>
</html>