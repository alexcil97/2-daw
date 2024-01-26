<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animales</title>
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
    $filename = "animales.csv";
    $fanimales = fopen($filename,"w+");
    if (file_exists($filename)) {
        echo "archivo creado o encontrado correctamente<br>";
        function escribir_fichero($animales,$file){
            foreach ($animales as $nombre_animales => $carateristicas) {
                fwrite($file, $nombre_animales . ": tipo " .$carateristicas["tipo"] .",".$carateristicas["patas"] . " patas, sonido " . $carateristicas["sonido"]."\n");
            }
        }
        escribir_fichero($animales,$fanimales);
        $current_value = file_get_contents($filename);
        $current_value .= "---------------";
        file_put_contents($filename,$current_value);
    }else {
    echo "el archivo no existe y/o no se pudo crear<br>";
    }
    fclose($fanimales);
    $filename = "animales_csv_format.csv";
    $gestor_animales = fopen($filename,"w+");
    if(file_exists($filename)){
        echo "el archivo ha sido creado o se ha encontrado con exito<br>";
    function escribir_fichero2($animales,$file){
        foreach ($animales as $nombre_animales => $carateristicas) {
            $incluir_texto = sprintf("%s:%s:%s:%s",$nombre_animales,$carateristicas["tipo"],$carateristicas["patas"],$carateristicas["sonido"]);
            fwrite($file,$incluir_texto."\n");
        }
    }        
    escribir_fichero2($animales,$gestor_animales);

    }else{
        echo "el archivo no se ha podido crear o encotrar<br>";
    }
    fclose($gestor_animales);
    ?>
</body>
</html>