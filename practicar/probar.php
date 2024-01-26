<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <?php
    $miperro = "bulldog";
    $miperro2 =& $miperro;
    $miperro3 =& $miperro2;
    $perrazo = 5;
    $array_perro = array("lanbrador", "bulldog", "golden", "akita", "husky");

    function cambiaRaza()
    {
        global $miperro;
        echo $miperro; //BULL
        $miperro = "labrador";
        echo $miperro;
    }
    echo $miperro;

    function cambiaRaza1($perrazo)
    {
        global $miperro;
        $miperro = "tiki";
        static $perrazo = 1;
        echo $miperro."<br>";
        echo $perrazo."<br>";
        $miperro = "labrador";
    }
    echo $perrazo;
    echo $miperro;
    function cambiaRaza2()
    {
        global $miperro;
        $miperro = "fosterrier";
        global $miperro2;
        global $miperro3;

        echo $miperro3;
    }
    echo $miperro3;
    echo $miperro2;
    echo $miperro1;
    cambiaRaza();
    cambiaRaza1();
    cambiaRaza2();
    cambiaRaza1();
    cambiaRaza1();
    cambiaRaza1();
    cambiaRaza2();
    ?>
</body>

</html>