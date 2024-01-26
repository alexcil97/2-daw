<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario" pattern="[a-zA-Z0-9]+" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["usuario"];
        if (isset($email)) {
            echo "El valor ha sido enviado con éxito<br>";
            $fecha_hoy = date('d/m/Y h:i:s');
            $nombre_fichero = "registro_entrada.txt";
            $gestor_fichero = fopen($nombre_fichero, "a+");
            fwrite($gestor_fichero, $fecha_hoy . ":" . $email . "\n");
            fclose($gestor_fichero);
        } else {
            echo "Ha habido un problema en el envío de la información<br>";
        }
    }
    ?>
</body>

</html>
