<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadido por</title>
</head>
<body>

    <?php
    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene el nombre del archivo
        $nombrePersona =  trim(htmlspecialchars($_POST["nombrePersona"]));
		if (empty($nombrePersona)) {
			$errores[] = "El nombre de la persona no debe estar vacío.";
		} else {
			$tipoArchivo = $_FILES["archivo"]["type"];
			$nombreArchivo = $_FILES["archivo"]["name"];

			// Verifica si el tipo de archivo es TXT
			if ($tipoArchivo === "text/plain") {

				// Ruta del archivo de destino en la carpeta "files"
				$rutaDestino = __DIR__."/files/$nombreArchivo";

				// Lee el contenido del archivo temporal
				$contenido = file_get_contents($_FILES["archivo"]["tmp_name"]);

				$contenido .= PHP_EOL ."Añadido por $nombrePersona";
				
				// Guarda el contenido actualizado en el archivo de destino
				$res = file_put_contents($rutaDestino, $contenido);
				
				if ($res === FALSE) {
					$errores[] = "No se pudo escribir el archivo.";
				} else {
					echo "<p style='color:green;'>Archivo subido correctamente.</p>";
				}
			} else {
				$errores[] = "El archivo debe ser .txt.";
			}
		}
		
		if (!empty($errores)) {
			echo "<p style='color:red;'>" .implode (" ", $errores) ."</p>";
		}
    }
    ?>

    <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo TXT:</label>
        <input type="file" id="archivo" name="archivo" accept=".txt" required>
        <br>
        <label for="nombrePersona">Nombre de la persona:</label>
        <input type="text" id="nombrePersona" name="nombrePersona" required>
        <br>
        <input type="submit" value="Subir Archivo">
    </form>

</body>
</html>