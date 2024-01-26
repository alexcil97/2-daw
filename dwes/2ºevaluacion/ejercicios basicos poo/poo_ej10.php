<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        trait CuidadosPlanta{
            public function regar(){
                $this->hidratacion_planta = true;
                echo "Regando la planta";
            }

            public function podar(){
                $this->tamanio_planta = "corta";
                echo "Podando la planta";
            }
        }
        class PlantaInterior{
            private $tamanio_planta;

            private $hidratacion_planta;

            public function __construct(){
                $this->tamanio_planta = "larga";
                $this->hidratacion_planta = false;
                echo "Se ha creado una planta interior". "<br>";
            }
            function __get($value){
                return $value;
            }
            use CuidadosPlanta;
        }
        class PlantaExterior{
            private $tamanio_planta;

            private $hidratacion_planta;

            public function __construct(){
                $this->tamanio_planta = "larga";
                $this->hidratacion_planta = false;
                echo "Se ha creado una planta exterior". "<br>";
            }
            

            use CuidadosPlanta;

        }



        $pEx = new PlantaExterior();
        $pIn = new PlantaInterior();

        

    ?>
</body>
</html>