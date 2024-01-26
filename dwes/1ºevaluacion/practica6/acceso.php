<!DOCTYPE html>
<html>
    <title>acceso</title>
    <body>
        <?php
        $comprobacion=false;
        $usuario_array["alex"]="1234";
        $usuario_array["bryan"]="5678";
        foreach ($usuario_array as $key => $value) {
            if ($key==$_POST["uname"] && $value==$_POST["upassword"]) {
                echo "hola caracola";
                $comprobacion=true;
                break;
            };
        };
        if ($comprobacion==false) {
            echo "usuario incorrecto"."<br><br>";
            echo '<a href="inicio.php"><button>Volver</button></a>';
        }
        ?>

    </body>
</html>
