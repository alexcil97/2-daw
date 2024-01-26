<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Regalo
    {
        private $referencia;
        private $descripcion;
        private $edadDesde;
        const SINREGALO = "Carbón";

        function __construct($referencia, $descripcion, $edadDesde = 0)
        {
            if (strlen($referencia) != 6) {
                $this->referencia = "A00000";
            } else {
                $this->referencia = $referencia;
            }
            if ($referencia != "A00000") {
                $this->descripcion = $descripcion;
                $this->edadDesde = $edadDesde;
            } else {
                $this->descripcion = self::SINREGALO;
                $this->edadDesde = 0;
            }
        }
        function getDescripcion(){
            return "la descripcion del producto es: " + $this->descripcion;
        }
        function getEdadDesde(){
            return "la edad recomendada para usar el producto es: " + $this->edadDesde;
        }
    }
    class Persona{
        private $edad;
        private $nombre;
        private $esBuena;
        private $regalo;

        function __construct($nombre,$bdate,$esBuena){
            $this->nombre = $nombre;
            $this->edad = (intval(date('Y'))-$bdate);
            $this->esBuena = $esBuena;
            $this->regalo = null;
        }
        function getEdad(){
            return "la edad es: " + $this->edad;
        }
        function getNombre(){
            return "la edad es: " + $this->nombre;
        }
        function getEsBuena(){
            return "la edad es: " + $this->esBuena;
        }


        function setRegalo(Regalo $regalo){
            $this->regalo = $regalo;
        }

        function abrirRegalo(){
            echo"$this->nombre tiene $this->edad años, se ha portado" .($this->esBuena)? "bien":"mal"."y ha recibido {$this->regalo->getDescripcion()}";
        }
    }
    class Santa{
        private $regalos=[];
        function __construct(){
            $this->crearRegalos();
        }
        function crearRegalos(){
                $this->regalos["regalo1"]=new Regalo("A12345","Puzle", 6);
                $this->regalos["regalo2"]=new Regalo("B12222","Peluche",0);
                $this->regalos["regalo3"]=new Regalo("C99999","Nintendo Switch",12);
                $this->regalos["regalo4"]=new Regalo("D88888","Libro de Roald Dahl",8);
                $this->regalos["regalo5"]=new Regalo("E99221","Libro de Stephen King",18);
        }
        function repartirRegalos(Persona $personas){
            // for ($i=0; $i < count($personas); $i++) { 
                # code...
            }
            // $this->personas = $this->regalos;
        } 
    // }
    ?>
</body>

</html>