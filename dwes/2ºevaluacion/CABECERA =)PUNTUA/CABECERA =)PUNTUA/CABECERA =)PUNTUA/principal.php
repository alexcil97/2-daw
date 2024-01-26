<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0%;
            margin: 0%;

        }

        body {
            width: 100vw;
            height: 100vh;
            background-image: linear-gradient(rgb(131, 173, 255), gray);
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>


<body>
    <?php
    require("cabecera.php");
    $cantidad[] = $_SESSION['mensajes'];
    ?>
    <div class="saludo__div">
        <h1 class="saludo__centrado">Bienvenido/a<br><?= $nombre . " " . $apellido ?></h1>
        <br><br>
        <h1><a href="recibidos.php">Tiene <p style="color: red;display:inline;font-size: x-large;
            font-weight: bold;"><?= $cantidad[0] ?></p> mensajes sin leer</a></h1>
    </div>
</body>

</html>