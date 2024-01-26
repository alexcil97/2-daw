<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>formulario de login</title>
    </head>
    <body>
        <form action="acceso.php" method="post">
            <fieldset>
                <legend>login de usuario: </legend>
                <label for="uname">First Name: </label>
                <input type="text" id="uname" name="uname"><br><br>
                <label for="upassword">contraseña: </label>
                <input type="password" id="upassword" name="upassword"><br><br>
                <input type="submit" value="enviar">
            </fieldset>
        </form>
    </body>
</html>