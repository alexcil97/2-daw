<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $usuario = htmlspecialchars(trim($_POST["usuario"]));
            $email = htmlspecialchars(trim($_POST["email"]));

            if(!empty($usuario) && !empty($email)){
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo "error no es un email valido<br>";
                }else{
                    $mitexto = $usuario.";".$email.PHP_EOL;
                    $probar = @file_put_contents(__DIR__."/files/archivo.txt",$mitexto,FILE_APPEND);
                    if ($probar) {
                        echo "se ha escrito en el fichero correctamente<br>";
                    }else{
                        echo"no se ha podido escribir en el fichero<br>";
                    }
                }
            }else{
                echo "el/los datos que has mandado no son validos o estan vacios";
            }
        }
    ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" name="usuario" id="usuario" pattern="[a-zA-Z0-9]+"required>
        <br><br>
        <label for="email">Correo electronico:</label>
        <input type="email" name="email" id="email">
        <br><br>
        <button type="submit">Enviar</button>


    </form>
</body>

</html>