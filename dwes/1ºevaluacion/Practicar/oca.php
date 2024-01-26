<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="name">Nombre de usuario:</label>
        <br><br>
        <input type="text" minlength="3" maxlength="25">
        <br><br>
        <label for="passwd">Contraseña:</label>
        <br><br>
        <input type="password" name="passwd" id="passwd" pattern="[\s\S]*" title="acepta cualquier caracter">
        <br><br>
        <label for="email">Correo electronico:</label>
    </div>

    </form>
</body>
</html>