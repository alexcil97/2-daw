<!DOCTYPE html>
<html lang="es">
<head>
    <title>Selector de Archivos</title>
</head>
<body>

<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
     <input type="color" name="color"><br/>
	 <label for="archivo">Selecciona un archivo:</label>
	 <input type="file" name="archivo" id="archivo" accept=".txt"><br/>
    <br>
    <input type="submit" value="Subir">
</form>
<?php
echo "<hr/><pre>";
var_dump($_FILES);
echo "</pre>";
?>
</body>
</html>