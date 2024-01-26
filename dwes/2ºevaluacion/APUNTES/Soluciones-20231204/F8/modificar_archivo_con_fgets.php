<!DOCTYPE html>
<html lang="es">
<head>
    <title>Modificar fichero</title>
</head>
<body>
<?php
	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$contenido = htmlspecialchars($_POST["contenido"]);
		$fichero = fopen(__DIR__."/files/archivo.txt", "w");
		$resultado = fwrite($fichero,$contenido);
		fclose($fichero);
		if ($resultado == false ) {
			echo "<p style='color:red;'>Hubo un error</p>";
		} else {
			echo "<p style='color:green;'>Actualizado correctamente</p>";
		}
	}
?>
<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
	 <label for="contenido">Contenido:</label><br/>
	 <textarea name="contenido" id="contenido" cols="30" rows="20">
		<?php 
		$fichero = fopen(__DIR__."/files/archivo.txt", "r");
		while (!feof($fichero)) {
		 echo htmlspecialchars(fgets($fichero));
		}
		fclose($fichero);
		?>
	 </textarea>
    <br>
    <input type="submit" value="Modificar">
</form>
</body>
</html>