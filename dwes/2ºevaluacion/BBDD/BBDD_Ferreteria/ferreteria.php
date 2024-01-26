<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once('../config.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = !empty($_POST['id']) ? htmlspecialchars(trim($_POST['id'])) : "Esta Vacio";
        $name = !empty($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : "Esta vacio";
        $description = !empty($_POST['description']) ? htmlspecialchars(trim($_POST['description'])) : "esta vacio";
        $price = !empty($_POST['price']) ? htmlspecialchars(trim($_POST['price'])) : "esta vacio";


        $conex = new mysqli(BBDD_HOST, BBDD_NAME, BBDD_PASSWORD, BBDD_USER);
        if (mysqli_connect_errno()) {
            printf("Conexion fallida: %s\n", mysqli_connect_errno());
        } else {
            echo "Conexion establecida<br><br>";
        }
        $query = "INSERT INTO product(id,name,description,price) VALUES(?,?,?,?)";
        if (!($sentencia = $conex->prepare($query))) {
            echo "fallo de preparacion: (" . $conex->errno . ")" . $conex->error;
        }
        $sentencia->bind_param('issd', $id,$name, $description, $price);
        if (!$sentencia->execute()) {
            echo "Error en la ejecucion: (" . $sentencia->errno . ")" . $sentencia->error;
        }
    }
    $conex->close();
    ?>

    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h2>Indique un producto para la base de datos</h2>
        <label for="id">ID del Producto: </label>
        <input type="text" id="id" name="id"><br>
        <label for="nombre">Nombre del Producto: </label>
        <input type="text" id="name" name="name"><br>
        <label for="descripcion">Descripción del Producto: </label>
        <textarea id="description" name="description"></textarea><br>
        <label for="precio">Precio del Producto: </label>
        <input type="number" step=".01" id="price" name="price">
        <br>
        <button type="submit">Agregar al Catalogo</button>
    </form>
</body>

</html>