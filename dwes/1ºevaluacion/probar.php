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
    "mamiferos" => array(
        "animal1" => array("id" => "MAM001", "nombre" => "León", "especie" => "Panthera leo", "habitat" => "Savannah"),
        "animal2" => array("id" => "MAM002", "nombre" => "Delfín", "especie" => "Tursiops truncatus", "habitat" => "Océano")
    ),
    "aves" => array(
        "animal3" => array("id" => "AVE001", "nombre" => "Águila", "especie" => "Aquila chrysaetos", "habitat" => "Montañas"),
        "animal4" => array("id" => "AVE002", "nombre" => "Pingüino", "especie" => "Spheniscidae", "habitat" => "Antártida")
    )
);
// mostrar array

foreach($animales as $tipo => $clasificacion){
    echo "tipo:".$tipo."<br>";

    foreach($clasificacion as $recuento => $datos){
    
    foreach($datos as $valor => $resultado){
    
    echo $valor.": ".$resultado." ";
    
    }
    
    echo "<br>";
    
    }
    
    
    
    }

?>
</body>
</html>