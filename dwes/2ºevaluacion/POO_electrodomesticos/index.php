<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class ElectrodomesticosDeCalentar
    {
    }
    class Horno
    {
        private const TEMPERATURA_MAX = 300;
        private $temperatura_deseada;
        private $temperatura_actual;

        public function __construct($temperatura_deseada, $temperatura_actual = 25)
        {
            $this->temperatura_deseada = $temperatura_deseada;
            $this->temperatura_actual = $temperatura_actual;
        }

        public function calentar($temperatura_actual, $incremento = 10, $temperatura_deseada)
        {

            usleep(1000000);
            if ($temperatura_actual == $temperatura_deseada || $temperatura_actual >= $temperatura_deseada) {
                return "Temperatura alcanzada";
            } else {
                echo "calentando...";
                $this->temperatura_actual += $incremento;
            }
        }
    }

    class Microondas
    {
        private $potencia = array('bajo', 'medio', 'alto');
        private $tiempo_de_calentado = range(1, 30);
        
        public function __construct($potencia,$tiempo_de_calentado){
            $this->potencia = $potencia;
            $this->tiempo_de_calentado = $tiempo_de_calentado;
        }

        public function calentar($tiempo_de_calentado = 1)
        {
            $calentando = $tiempo_de_calentado * 1000000;
            for ($i = 0; $i < $tiempo_de_calentado; $i++) {
                usleep($calentando);
                echo "calentando en el microondas";
            }

            return "Finalizado, ya esta caliente";
        }
    }

    ?>
</body>

</html>