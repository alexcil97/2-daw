<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>


<body>
    <header>
        <?php
        session_start();
        $usuario = $_SESSION['user_id'];
        $filename = "users_aula_virtual.csv";
        $gestor = fopen(__DIR__ . "/" . $filename, "r");
        $nombre;
        $apellido;
        $ocupacion;
        while (!feof($gestor)) {
            $archivo[] = fgetcsv($gestor);
        }
        if (is_array($archivo)) {
            for ($i = 0; $i < count($archivo); $i++) {
                if ($archivo[$i][0] == $usuario) {
                    $nombre = $archivo[$i][3];      //almacenamos el nombre del usuario
                    $apellido = $archivo[$i][4];    //almacenamos su contraseña
                    if ($archivo[$i][5] == "1") {
                        $ocupacion = "profesor";
                    } else {
                        $ocupacion = "Alumno";
                    }
                }
            }
        }
        ?>
        <div class="header__div">
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item"><a href="enviados.php" class="header__item  item--a">Mensaje Enviados</a></li>
                    <li class="header__item"><a href="recibidos.php" class="header__item  item--a">Mensajes Recibidos</a></li>
                    <li class="header__item"><a href="index.php" class="header__item  item--a">Cerrar Sesion</a></li>
                    <li class="header__item item--group"><?= "<img src='globo.png' alt='textglobo'><div><p><a href='principal.php' class='header__item  item--a'>" . $nombre . " " . $apellido . "</a><p class='ocu'><a href='principal.php' class='header__item  item--ocupacion'>" . $ocupacion . "</a></p></p> </div>"; ?></li>
                </ul>
            </nav>
        </div>
</body>
</header>

</html>