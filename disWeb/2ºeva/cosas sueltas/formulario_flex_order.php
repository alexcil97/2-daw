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

        .container {
            width: 50vw;
            height: 50vh;
            margin: auto;

            display: flex;
            justify-content: space-around;
            align-items: center;
            border: 2px inset black;

        }

        .container__item {
            border: 1px solid black;
            margin: 5%;
            padding: 5%;
            justify-items: center;
            display: flex;
            flex-wrap: wrap;
        }
        .item--nobox{
            border: none;
        }
        .item--order{
            order: 1;
            background-color: blueviolet;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <div class="container__item">
                <label for="nombre">Nombre:</label>
                <br><br>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="container__item">
                <label for="passwd">Contraseña:</label>
                <br><br>
                <input type="password" name="passwd" id="passwd">
            </div>
            <div class="container__item  item--order">
                <label for="mail">Correo:</label>
                <br><br>
                <input type="email" name="mail" id="mail">
            </div>
            <div class="container__item item--nobox">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>

</html>