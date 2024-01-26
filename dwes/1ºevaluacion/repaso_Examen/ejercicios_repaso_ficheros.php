<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $animales = array(
        "perro" => array(
            "tipo" => "mamífero",
            "patas" => 4,
            "sonido" => "ladrido"
        ),
        "gato" => array(
            "tipo" => "mamífero",
            "patas" => 4,
            "sonido" => "maullido"
        ),
        "pájaro" => array( 
            "tipo" => "ave",
            "patas" => 2,
            "sonido" => "canto"
        ),
        "serpiente" => array(
            "tipo" => "reptil",
            "patas" => 0,
            "sonido" => "siseo"
        )
    );
    $nombre_archivo = "animalitos.txt";
    $gestor = fopen($nombre_archivo, "w+");

    foreach ($animales as $email => $datos) {
        $escribir = $email . ": tipo " . $datos["tipo"] . ", " . $datos["patas"] . " patas, sonido " . $datos["sonido"] . PHP_EOL;
        fwrite($gestor, $escribir);
    }

    while (!feof($gestor)) {
        echo fgets($gestor);
    }
    fclose($gestor);
    ?>
</body>

</html>