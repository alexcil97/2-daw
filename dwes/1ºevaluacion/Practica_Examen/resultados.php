<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        include("libros.php");
        include("buscar.php");

        function buscarLibro($resultado,$libros){
            if (isset($_POST["busqueda"])){
                $resultado=trim($_POST["busqueda"]);
                if (!empty($resultado)) {
                    foreach ($libros as $key => $value) {
                        if ($libros == $resultado) {
                            echo"el libro es ".$value."con el Isban".$key;
                        }
                    }
                }else{
                    echo"esta vacio";
                }
            }

        }
        ?>
    </body>
</html>