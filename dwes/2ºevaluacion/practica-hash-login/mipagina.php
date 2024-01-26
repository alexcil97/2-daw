<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: rgb(221, 255, 200);
            background: linear-gradient(90deg, rgba(221, 255, 200, 1) 47%, rgba(4, 152, 255, 0.6643907563025211) 100%);

        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            width: 50%;
            height: 30vh;
            border-radius: 5px;
            margin: 2%;
            padding: 10%;
            background: rgb(145, 255, 77);
            background: linear-gradient(90deg, rgba(145, 255, 77, 1) 31%, rgba(97, 169, 255, 1) 86%);

        }

        .container__item {
            margin: 5%;
            padding: 5%;
            border: 1px solid black;
            display: flex;
            flex-wrap: wrap;
            border-radius: 5px;
            background: rgb(0, 255, 33);
            background: linear-gradient(90deg, rgba(0, 255, 33, 1) 19%, rgba(0, 207, 255, 1) 85%);
        }

        .item--submit {
            font-size: 1rem;
            color: white;
            text-align: center;
            outline: none;
            border: none;
            background: transparent;

        }

        .item--submit input[type="submit"] {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 20%;
            padding: 15px 20px;
            /* Ajusta el valor según sea necesario */
            font-size: 16px;
            /* Opcional: ajusta el tamaño de la fuente */
            cursor: pointer;
            transition: all .3s ease-in-out;
        }
    </style>
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = !empty($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : "esta vacio";
        $contra = !empty($_POST['passwd']) ? htmlspecialchars(trim($_POST['passwd'])) : "esta vacio";
        $filename = "cuentas.txt";
        $gestor = fopen(__DIR__ . "/ficheros/" . $filename, "r");
        $verificador = false;
        while (!feof($gestor)) {
            $datos = explode(",", fgets($gestor));
            if ($datos[0] == $user && $datos[1] == $contra) {
                $verificador = true;
                break;
            } else {
                $verificador = false;
            }
        }
        fclose($gestor);
        function resultado()
        {
            global $verificador;
            global $datos;
            if ($verificador == true) {
                echo "<h2>bienvenido {$datos[0]}</h2>";
            } else {
                echo "<h2>error de login</h2>";
            }
        }
    }
    ?>
    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="container__item">
                <label for="nombre">Nombre:</label>
                <br><br>
                <input type="text" name="nombre" id="nombre" pattern="[a-zA-Z0-9._@]{2,26}">
            </div>
            <div class="container__item">
                <label for="passwd">Contraseña:</label>
                <br><br>
                <input type="password" name="passwd" id="passwd" pattern="[a-zA-Z0-9._@]{2,26}">
            </div>
            <div class="container__item  item--submit">
                <input type="submit" value="Enviar" id="Envio">
            </div>
        </form>
    </div>


</body>

</html>