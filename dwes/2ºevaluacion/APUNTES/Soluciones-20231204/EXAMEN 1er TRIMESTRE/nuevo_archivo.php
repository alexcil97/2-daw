<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>

    <?php
    // Verifica si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtiene el nombre del archivo
        $nombreArchivo =  trim(htmlspecialchars($_POST["nombreArchivo"]));
		
		if (empty($nombreArchivo)) {
			$errores[] = "El nombre del archivo no debe estar vacío.";
		} else {
			$tipoArchivo = $_FILES["archivo"]["type"];

			// Verifica si el tipo de archivo es TXT
			if ($tipoArchivo === "text/plain") {

				// Ruta del archivo de destino en la carpeta "files"
				$rutaDestino = __DIR__."/files/$nombreArchivo.txt";

				// Lee el contenido del archivo temporal
				$contenido = file_get_contents($_FILES["archivo"]["tmp_name"]);


				// Guarda el contenido actualizado en el archivo de destino
				file_put_contents($rutaDestino, $contenido);

				echo "<p style='color:green;'>Archivo subido correctamente.</p>";
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
        <label for="nombreArchivo">Nombre del archivo:</label>
        <input type="text" id="nombreArchivo" name="nombreArchivo" required>
        <br>
        <input type="submit" value="Subir Archivo">
    </form>

</body>
</html>