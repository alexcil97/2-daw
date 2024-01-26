<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = !empty($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : "esta vacio";
        $especie = !empty($_POST['especie']) ? htmlspecialchars(trim($_POST['especie'])) : "esta vacio";
        $edad = !empty(is_numeric($_POST['edad']) && is_numeric($_POST['edad'])>0) ? htmlspecialchars(trim($_POST['edad'])) : "esta vacio";

        $conex1 = new mysqli("localhost", "alex.admin", "tKPuGpfO1wrkqnwN", "alex2024");
        if (mysqli_connect_errno()) {
            printf("Conecxión fallida: %s\n", mysqli_connect_errno());
            exit();
        } else {
            echo "Conexión establecida";
            echo "<br><br>";
        }

        $query_insert = "INSERT INTO animal (nombre,especie,edad) VALUES ('$nombre','$especie','$edad')";
        $query_update = "UPDATE animal SET(nombre='$nombre',especie='$especie',edad='$edad')WHERE";
        $query_delete = "INSERT INTO animal (nombre,especie,edad) VALUES ('$nombre','$especie','$edad')";
        if($conex1->query($query_insert)===TRUE){
            echo "Animal agregado correctamente.";
        }else{
            echo "Error al insertar el Animal: " . $conex1->error;
        }
        $conex1->close();
    }
    ?>

    <div>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <button type="button" name="value1">agregar animal</button>
            <button type="button" name="value2">Actualizar animal</button>
            <button type="button" name="value3">Borrar Animal</button>
            <br><br>    
            <label class="nombre">Escriba el nombre del animal:</label>
            <br>
            <input type="text" name="nombre" id="nombre">
            <br><br>
            <label for="especie">Indique la especie:</label>
            <br>
            <input type="text" name="especie" id="especie">
            <br><br>
            <label class="edad">Indique la edad del animal:</label>
            <br>
            <input type="number" name="edad" id="edad">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>



</body>

</html>