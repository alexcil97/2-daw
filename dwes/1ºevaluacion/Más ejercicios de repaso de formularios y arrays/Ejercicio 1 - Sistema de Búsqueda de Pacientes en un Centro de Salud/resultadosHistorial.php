<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Resultados de Búsqueda - Centro de Salud</title>
</head>

<body>
    <?php

    var_dump($_POST);
    echo "<br>";
    require("pacientes.php");
    $email = isset($_POST["nombre"]) ? htmlspecialchars(trim($_POST["nombre"])) : "";
    echo " el nombre es $email<br>";
    $id = isset($_POST["numero"]) ? htmlspecialchars(trim($_POST["numero"])) : "";
    echo "el id es $id";
    echo "<br>";
    $email = strtolower($email);
    $id = strtolower($id);
    foreach ($pacientes as $hospital => $pacientes_hospital) {
        foreach ($pacientes_hospital as $clave => $array_datos_paciente) {

            if (!empty($id == $clave) && empty($email == $array_datos_paciente["nombre"])) {
                echo "se cumple la 1<br>";

                echo "<pre>";
                print_r($array_datos_paciente);
                echo "</pre>";
                break;
            } elseif (!empty($email == $array_datos_paciente["nombre"]) && empty($id == $clave)) {
                echo "se cumple la 2<br>";
                echo "<pre>";
                print_r($array_datos_paciente);
                echo "</pre>";
            } elseif (!empty($email == $array_datos_paciente["nombre"]) && !empty($id == $clave)) {
                echo "se cumple la 3<br>";
                echo "<pre>";
                print_r($array_datos_paciente);
                echo "</pre>";
                break;
            }
        }
    }
    ?>
</body>

</html>