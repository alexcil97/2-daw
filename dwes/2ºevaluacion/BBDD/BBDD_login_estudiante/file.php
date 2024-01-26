<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //enlazamos la hoja config.php con los valores de accesso a la base de datos
    require_once("config.php");

    //Paso 1: verificamos si los valores enviados en el formulario se envian a traves de post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Paso 2: almacenamos los valores del formulario en variables, en caso de no poder almacenaremos que estan vacios.
        $name = !empty($_POST["name"]) ? htmlspecialchars(trim($_POST['name'])) : "esta vacio";
        $contra = !empty($_POST['passwd']) ? htmlspecialchars(trim($_POST['passwd'])) : "esta vacio";

        //Paso 3: verificamos si los valores almacenados, coinciden con los valores que se reciben del formulario.
        if($name==$_POST['name'] && $contra==$_POST['passwd']){

            //Paso 4: establecemos la conexion de la base de datos con los valores del archivo config.php
            $conex1 = new mysqli(BBDD_HOST,BBDD_NAME,BBDD_PASSWORD,BBDD_USER);


            //Paso 5: Revisar si hay conexión a la base de datos para ello usaremos el metodo errno
            if(mysqli_connect_errno()){
                printf("Conexion fallida %s\n",mysqli_connect_errno());
                exit();
            }else{
                echo "<h3>Usuario y contraseña correctos.</h3>";
                echo "Conexion establecida";
            }

            //Paso 6: preparamos la query
            $sql = "SELECT name,username,password FROM user WHERE (username='?' or email='?') and (password='?')";
            $sql_prepared = $conex1->prepare($sql);
            
            //Paso 7: Dar valor a cada '?'
            $sql_prepared->bind_param("sss",$name,$name,$contra);

            //Paso 8: Ejecutar la query
            $result_prepared = $sql_prepared->execute();

            //Paso 9: Obtener resultados
            if($result_prepared){
                $result = $sql_prepared->get_result();
                while($file = $result->fetch_assoc()){
                    echo "{$fila['name']} - {$fila['username']}-{$fila['password']}";
                }
                echo "encontrados: " . $result->num_rows;
            }else {
                echo "se ha producido un error";
            }

            echo "Filas afectadas:" . $conex1->affected_rows;
            
            
        }else{//Paso 3-2: sino podemos verificar los valores almacenados damos un error
            echo '<div style="color:red; font-weight:bold;">Usuario o
            contraseña incorrecta.</div>';
        }

    }
    mysqli_close($conex1);
    ?>

    <div>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="name">Nombre o Email:</label>
            <br>
            <input type="text" id="name" name="name">
            <br><br>
            <label for="passwd">Password:</label>
            <br>
            <input type="text" name="passwd" id="passwd">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>