<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <label for="fichero">Fichero:</label>
        <br><br>
        <?php
        $nombre_archivo = "files/archivo.txt";
        $gestor = fopen($nombre_archivo, "a+");
        echo '<textarea name="" id="" cols="30" rows="10">';
        while (!feof($gestor)) {
            $linea = fgets($gestor);
            echo $linea;
        }
        echo '</textarea>';
        ?>
    </form>
</body>

</html>