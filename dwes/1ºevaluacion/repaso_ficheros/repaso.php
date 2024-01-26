<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $animales = array(
        "perro" => array(
            "raza" => "Labrador",
            "edad" => 3,
            "color" => "dorado"
        ),
        "gato" => array(
            "raza" => "Siames",
            "edad" => 2,
            "color" => "blanco"
        ),
        "pajaro" => array(
            "tipo" => "Canario",
            "edad" => 1,
            "color" => "amarillo"
        )
    );
    mkdir(__DIR__ . "/carpetita",0777,true);
    $filename = "animalitacos.txt";
    $gestor = fopen(__DIR__ . "/carpetita/" . $filename, "w+");


    if (!file_exists(__DIR__ . "/carpetita/" . $filename)) {
        echo "<h1>El archivo no existe por ende se creara</h1>";


        $resultado = fwrite($gestor, " ");
        foreach ($animales as $nanimal => $array_datos) {
            $resultado .= fwrite($gestor, $animal . ": ");
            foreach ($array_datos as $key => $value) {
                $resultado .= fwrite($gestor, $key . "=" . $value);
            }
            $resultado .= fwrite($gestor, "<br>");
        }
        fclose($gestor);
    } else {
        echo "<h1>El archivo ya existe por ende se escribira en el</h1>";


        $resultado = fwrite($gestor, "");
        foreach ($animales as $nanimal => $array_datos) {
            $resultado .= fwrite($gestor, $nanimal . ": ");
            foreach ($array_datos as $key => $value) {
                $resultado .= fwrite($gestor, $key . "=" . $value);
            }
        }
        fclose($gestor);
    }


    ?>
</body>

</html>