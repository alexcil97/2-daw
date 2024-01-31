<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("config.php");
    //comprobacion de que se estan enviando datos por get
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = !empty($_GET['id']) ? htmlspecialchars(trim($_GET['id'])) : "vacio";

        //verificacion de la integridad del valor pasado por get
        if ($id =="vacio") {
            echo "fallo inesperado";
            exit();
        }
        //creacion de la conexion
        $conexion = mysqli_connect(BBDD_HOST, BBDD_USER, BBDD_PASSWORD, BBDD_NAME);
        //comprobacion de la conexion
        if ($conexion->connect_errno) {
            die('Error al conectar: ' . $conexion->connect_error);
        }
        //preparacion de la query
        $stmt = $conexion->prepare("DELETE FROM pelicula WHERE id_pelicula=?");
        $stmt->bind_param("i", $id);

        //ejecuccion de la query
        $stmt->execute();


        if ($stmt->affected_rows > 0) {
            echo "pelicula borrada con exito";
        } else {
            echo "a habido un problema al borrar la pelicula";
        }

        $stmt->close();

        $stmt = $conexion->prepare("SELECT id_pelicula,titulo FROM pelicula");

        $stmt->execute();

        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "{$row['id_pelicula']}-{$row['titulo']}<br>";
            }
        }
        $stmt->close();
        $conexion->close();
    }
    ?>
    <form action="<?=htmlspecialchars(trim($_SERVER['PHP_SELF'])) ?>" method="GET">
        <label for="id">id:</label>
        <input type="number" id="id" name="id">
        <br><br>
        <input type="submit" value="Enviar id">
    </form>
</body>

</html>