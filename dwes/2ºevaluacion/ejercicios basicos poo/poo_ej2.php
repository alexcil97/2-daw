<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Persona
    {
        private $nombre;
        private $edad;

        const MAYORIA_DE_EDAD = 18;

        function __construct($nombre, $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function mostrarDatos()
        {
            echo "Nombre: " . $this->nombre . "<br>";
            echo "Edad: " . $this->edad . "<br>";
        }
        function comprobarMayorEdad()
        {
            if ($this->edad >= self::MAYORIA_DE_EDAD) {
                echo "es mayor de edad<br>";
            } else {
                echo "es menor de edad<br>";
            }
        }
    }

    $persona1 = new Persona('paco', 15);
    $persona2 = new Persona('juan', 20);
    $persona1->mostrarDatos();
    $persona1->comprobarMayorEdad();
    $persona2->mostrarDatos();
    $persona2->comprobarMayorEdad();

    ?>
</body>

</html>