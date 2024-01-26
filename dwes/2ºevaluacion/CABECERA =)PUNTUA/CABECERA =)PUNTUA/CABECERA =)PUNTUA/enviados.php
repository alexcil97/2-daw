<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("cabecera.php");
    $filename1 = "users_aula_virtual.csv";
    $filename2 = "mensajes_aula_virtual.csv";
    $id = $_SESSION['user_id'];
    $gestor_users = fopen(__DIR__ . "/" . $filename1, "r");
    $gestor_mensajes = fopen(__DIR__ . "/" . $filename2, "r");

    while (!feof($gestor_users)) {
        $datos[] = fgetcsv($gestor_users);
    }

    while (!feof($gestor_mensajes)) {
        $mensajes[] = fgetcsv($gestor_mensajes);
    }

    // for ($i = 1; $i < count($mensajes); $i++) {

    //     if ($mensajes[$i][1] == $id) {
    //         $mensajes_usuario = $mensajes[$i];
    //         if ($mensajes_usuario[2] == "true") {
    //             $mensajes_usuario[2] = "leido";
    //         } else {
    //             $mensajes_usuario[2] = "No leido";
    //         }
    //     }
    // }
    //el codigo de arriba lo hice yo y abajo chatgpt me soluciono el problema pero no la duda

    function imprimirMensaje()
    {
        global $mensajes;
        global $id;
        global $mensajes_usuario;
        for ($i = 1; $i < count($mensajes); $i++) {
            if ($mensajes[$i][0] == $id) {
                $nuevoMensaje = $mensajes[$i];
                if ($nuevoMensaje[2] == 'true') {
                    $nuevoMensaje[2] = "leido";
                } else {
                    $nuevoMensaje[2] = "no leido";
                }
                $mensajes_usuario[] = $nuevoMensaje;
            }
        }
    }
    $mensajes_usuario = [];

    @imprimirMensaje();

    $opcion1 = (isset($_GET["opcion1"]) ? htmlspecialchars($_GET["opcion1"]) : "");
    $opcion2 = (isset($_GET["opcion2"]) ? htmlspecialchars($_GET["opcion2"]) : "");

    $display_elemento1 = ($opcion1 === "Leidos") ? "block" : "none";
    $display_elemento2 = ($opcion2 === "no leidos") ? "block" : "none";

    ?>
    <div class="container">
        <form name="verificador" method="GET" action="" class="container__form">
            <input type="submit" name="opcion1" value="Leidos" class="container__item">
            <input type="submit" name="opcion2" value="no leidos" class="container__item">
            <input type="submit" name="opcion2" value="ocultar" class="container__item">
        </form>
    </div>
</body>

<?php
for ($i = 0; $i < count($mensajes_usuario); $i++) {
    for ($j = 1; $j < count($datos); $j++) {
        if ($mensajes_usuario[$i][0] == $datos[$j][0]) {
            $mensajes_usuario[$i][0] = $datos[$j][3];
        }
        if ($mensajes_usuario[$i][1] == $datos[$j][0]) {
            $mensajes_usuario[$i][1] = $datos[$j][3];
        }
    }
    echo "<div style='display: $display_elemento1;'>";

    if ($mensajes_usuario[$i][2] == "leido") {
        echo "<div class='div__enviados'>";
        echo '<h1>mensaje nº' . $i + 1 . '</h1>';
        echo $mensajes_usuario[$i][2] . "<br>";
        echo 'mensaje de: ' . $mensajes_usuario[$i][0] . ' <br> para: ' . $mensajes_usuario[$i][1] . '<br> te envia el siguiente mensaje:<br> ' . $mensajes_usuario[$i][3] . '<br> con fecha:  ' . $mensajes_usuario[$i][4] . ' horas<br><br>';
        echo '</div>';
    }
    echo "</div>";
    echo "<div style='display: $display_elemento2;'>";

    if ($mensajes_usuario[$i][2] == "no leido") {
        echo "<div class='div__enviados'>";
        echo '<h1>mensaje nº' . $i + 1 . '</h1>';
        echo $mensajes_usuario[$i][2] . "<br>";
        echo 'mensaje de: ' . $mensajes_usuario[$i][0] . ' <br> para: ' . $mensajes_usuario[$i][1] . '<br> te envia el siguiente mensaje:<br> ' . $mensajes_usuario[$i][3] . '<br> con fecha:  ' . $mensajes_usuario[$i][4] . ' horas<br><br>';
        echo '</div>';
    }
    echo "</div>";
}

$nMensajes = count($mensajes_usuario);
$_SESSION['mensajes'] = $nMensajes;
?>


</html>