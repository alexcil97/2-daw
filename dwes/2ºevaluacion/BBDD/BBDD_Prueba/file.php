<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         $conex1 = new mysqli("localhost", "alex.admin", "tKPuGpfO1wrkqnwN", "alex2024"); // Abre una conexión
         if (mysqli_connect_errno()) { // Comprueba conexión
         printf("Conexión fallida: %s\n", mysqli_connect_error());
         ();
         }else{
            echo "conexion establecida";
            echo "<br><br>";
         }

         $query_insert = 'SELECT id, name FROM user ORDER BY id';
         if($result = $conex1->query($query_insert)){
            $result->data_seek(0);
            while ($fila=$result->fetch_assoc()){
                printf("id: %s, name: %s",$fila['id'],$fila['name']);
                print("<br>");
         }
        }exit
        $name = "Denys";
        $lastname = "Revutskyi";
        $username = "denys2024";
        $password = md5("pass123");
        $email = 'denys.msi04@gmail.com';

        $query_insert = "INSERT INTO user (name,lastname,username,password,email) VALUES ('$name','$lastname','$username','$password','$email')";
        if($conex1->query($query_insert)===true){
            echo "inserccion correcta";
        }else{
            echo "error en la inserccion: ".$conex1->error;
        }
        $conex1->close();
    ?>
</body>
</html>