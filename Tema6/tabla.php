<?php

	if (isset($_POST['columnas'])) {
		$columnas = $_POST['columnas'];
	}
	if (isset($_POST['filas'])) {
		$filas = $_POST['filas'];
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>tabla</title>
</head>
<body>
	<form action="tabla.php" method="POST">
		<span>Filas:</span><input type="text" name="filas" value=<?php echo "$filas";?>>
		<span>Columnas:</span><input type="text" name="columnas" value=<?php echo "$columnas";?>>
		<input type="submit" name="enviar">
	</form><br>
</body>
</html>
<?php

	if (isset($columnas) && $columnas<=0) {
		echo "<h2>El numero de columnas tiene que ser mayor a 0</h2>";
	}
	if (isset($filas) && $filas<=0) {
		echo "<h2>El numero de filas tiene que ser mayor a 0</h2>";
	}

	echo "<table border='2px'>";
	for ($i=1; $i <= $filas; $i++) { 
		echo "<tr>";
		for ($f=1; $f <= $columnas; $f++) { 
			
			echo "<td border='2px'>".$i.",".$f;
		}
		echo "</tr>";
	}
	echo "</table>";


?>