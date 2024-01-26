<!DOCTYPE html>
<html lang="es">
<head>
    <title>Añadir calificaciones</title>
</head>
<body>

<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
     <label for="id">Id:</label>
	 <input type="text" id="id" name="id"><br/>
	 <label for="nombre">Nombre:</label>
	 <input type="text" id="nombre" name="nombre" ><br/>
	 <label for="apellido">Apellido:</label>
	 <input type="text" id="apellido" name="apellido" maxlength="30" minlength="2"><br/>
	 <label for="nota">Nota:</label>
	 <input type="number" name="nota" min="0" max="10" value="0"><br/>
    <br>
    <input type="submit" value="Añadir">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$id = limpiar("id");
	$email = limpiar("nombre");
	$apellido = limpiar("apellido");
	$nota = limpiar("nota");
	
	if (strlen($id)!=4) {
		$errores[] = "ID con longitud distinta de 4";
	}
	if ((strlen($email)<2)||(strlen($email)>30)) {
		$errores[] = "Nombre con longitud menor de 2 o mayor de 30";
	}
	if ((strlen($apellido)<2)||(strlen($apellido)>30)) {
		$errores[] = "Apellido con longitud menor de 2 o mayor de 30";
	}
	
	$nota = (!$nota)?0:$nota;
	if (!is_numeric($nota) || ($nota<0) || ($nota>10) ) {
		$errores[] = "La nota debe valer entre 0 y 10";
	} 
	
	if (empty($errores)) {
		$linea = "$id;$email;$apellido;$nota\n";
		$fichero = fopen("calificaciones.csv", "a");
		fwrite($fichero, $linea);
		fclose($fichero);
		echo "Se ha añadido la calificación de $email $apellido ID:$id correctamente";
	} else {
		echo "<p style='color:red;'>" .implode (".<br/> ", $errores) .".</p>";
	}
}

function limpiar ($valor) {
	return (empty($_POST[$valor])?"":trim(htmlspecialchars($_POST[$valor])));
}

?>