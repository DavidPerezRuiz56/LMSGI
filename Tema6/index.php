<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<h1>TITULO</h1>
	<?php
		for ($i=1; $i < 6; $i++) { 
			echo "<h".$i.">HOLA</h".$i.">";
		}
	?>
</body>
</html>