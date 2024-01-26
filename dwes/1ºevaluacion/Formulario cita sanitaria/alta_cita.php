<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    require("formulario.php");
    $email = isset($_POST["nombre"]) ? htmlspecialchars(trim($_POST["nombre"])) : "";
    $nSegSocial = isset($_POST["segsocial"]) ? htmlspecialchars(trim($_POST["segsocial"])) : "";
    $fNacimiento = isset($_POST["fnacimiento"]) ? htmlspecialchars(trim($_POST["fnacimiento"])) : "mal";
    $especialistas = isset($_POST["especialistas"]) ? htmlspecialchars(trim($_POST["especialistas"])) : "";
    $fCita = isset($_POST["fcita"]) ? htmlspecialchars(trim($_POST["fcita"])) : "";
    $politica = isset($_POST["politica"]) ? htmlspecialchars(trim($_POST["politica"])) : "";
    $longNom = (int) 20 - strlen($email);
    $nAsteriscos = str_repeat("*", $longNom);
    echo "-Nombre de la cita: <br><br>";
    printf("%s %s", $nAsteriscos, $email); //%s hace referencia a que se va a insertar un string y como son dos se usa 2%s
    echo "<br><br>";
    echo "-NSS: <br><br>";
    printf("%020s", $nSegSocial);
    echo "<br>";
    echo "<br>";
    echo "-Fecha: <br><br>";
    $fNacimientoOrdenado = date("d-m-Y", strtotime($fNacimiento));
    echo $fNacimientoOrdenado;
    echo "<br>";
    echo "<br>";
    echo "-Especialista: <br><br>";
    echo "<br>";
    $longEsp = (int) 20 - strlen($especialistas);
    $nGuiones = str_repeat("-", $longEsp);
    printf("%s%s", $nGuiones, strtoupper($especialistas));
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo $fCita;
    echo "<br>";
    echo $politica;
    ?>

</body>

</html>