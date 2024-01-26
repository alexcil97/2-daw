<!DOCTYPE html>
<html lang="es">

<head>
    <title>practica bucles y dondicionales</title>
</head>

<body>
    <?php
    echo "//////practica1///////////";
    for ($x = 0; $x <= 20; $x++) {
        if ($x % 2 != 0) {
            echo "el numero: $x es impar <br>";
        } else {
            echo "el numero: $x es par <br>";
        }
        ;
    }
    echo "////////practica2/////////<br>";
    for ($i = 0; $i <= 10; $i++) {
        for ($j = 0; $j <= 10; $j++) {
            echo "$i X $j = " . $i * $j . "<br>";
        }
        ;
    }
    ;
    echo "//////////practica3////////<br>";
    $p = 0;
    for ($k = 0; $k <= 50; $k++) {
        if ($k % 2 == 0) {
            $p = $p + $k;
            echo $p . "<br>";
        }
        ;
    }
    ;
    $l = 0;
    $l2 = 0;
    while ($l <= 50) {
        if ($l % 2 == 0) {
            $l2 = $l2 + $l;
            echo $l2 . "<br>";
        }
        ;
        $l++;
    }
    ;
    echo "//////////////practica4////////////<br>";
    $contador = 1;
    for ($z = 2; $z <= 100; $z++) {
        $esprimo = true;
        for ($w = 2; $w < $z; $w++) {
            if ($z % $w == 0) {
                $esprimo = false;
            }
        }
        if ($esprimo == true) {
            $contador = +1;
            echo "$z es primo <br>";
        }else {
            echo "$z no es primo<br>";
        }

        ;
    }
    ; ?>
</body>

</html>