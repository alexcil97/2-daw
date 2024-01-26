<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        require("entrada.php");
        $email = isset($_POST["usuario"])?htmlspecialchars(trim($_POST["usuario"])):"";
        $contraseña = isset($_post["passwd"])?htmlspecialchars(trim($_post["passwd"])):"";
        $email= isset($_POST["email"])?htmlspecialchars(trim($_POST["email"])):"";
        $navegador = isset($_POST["navegador"])?htmlspecialchars(trim($_POST["navegador"])):"";
        $genero = isset($_POST["genero"])?htmlspecialchars(trim($_POST["genero"])):"";
        echo $email;
        echo "<br>";
        print_r($_POST["passwd"]);
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $navegador;
        echo "<br>";
        echo $genero;

        ?>
    </body>
</html>