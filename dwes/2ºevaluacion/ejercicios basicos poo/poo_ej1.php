<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?php
    class Persona
    {
        private $nombre;
        private $edad;
        function __construct(String $nombre, int $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function mostrarDatos()
        {
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Edad: " . $this->edad . "<br><hr>";
        }
    }

    $persona = new Persona('paco', 25);
    $persona->mostrarDatos();
    ?>
</body>

</html>