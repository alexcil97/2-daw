<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;

        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            flex-direction: column;
            margin-top: -10%;
            /* Ajusta la cantidad según tus necesidades */
            background-image: linear-gradient(125deg, #2c3e50, #27ae60, #2980b9, #e74c3c, #8e44ad);
            background-size: 400%;
            animation: bganimation 15s infinite;

        }

        h1 {
            font-size: 72;
            margin: 2%;
            background: -webkit-linear-gradient(#8e44ad, #000);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 8px 8px 15px #000;

        }

        div {
            border: 5px solid black;
            border-radius: 5px;
            padding: 3%;

        }

        p {
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            font-weight: bolder;
            text-shadow: #000;

        }

        @keyframes bganimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }

        }
    </style>
</head>

<body>
    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
        $password = isset($_POST['passwd']) ? md5(htmlspecialchars($_POST['passwd'])) : "";


        if (!empty($email) && !empty($password)) {
            $filename = "users_aula_virtual.csv";
            $filename2 = "mensajes_aula_virtual.csv";
            $gestor = fopen(__DIR__ . "/" . $filename, "r");
            $gestor_mensajes = fopen(__DIR__ . "/" . $filename2, "r");
            while (!feof($gestor)) {
                $lineas[] = fgetcsv($gestor);
            }

            for ($i = 0; $i < count($lineas); $i++) {
                // echo "<pre>";
                // print_r($lineas[$i]);
                // echo "</pre>";
                // var_dump($lineas[$i][1]);
                if ($lineas[$i][1] == "$email" && $lineas[$i][2] == $password) {
                    $_SESSION["user_id"] = $lineas[$i][0];
                    if (isset($_SESSION['user_id'])) {
                        header("location: principal.php");
                        exit();
                    }
                } else {
                }
            }
            echo "<h1 style='color:red;' > Datos de acceso incorrectos</h1>";
        } else {
            echo "<h1>No se pueden dejar los datos vacios</h1>";
        }
    } else {
    }
    ?>
    <div>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <label for="email">
                <p>Indique su Correo:</p>
            </label>
            <input type="text" name="email" id="email">
            <br><br>
            <label for="passwd">
                <p>Indique su Contraseña:</p>
            </label>
            <input type="password" name="passwd" id="passwd">
            <br><br>
            <input type="submit" value="Enviar">

        </form>
    </div>
</body>

</html>