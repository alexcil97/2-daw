<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>mas practica de bucles y condicionales</title>
</head>

<body>
    1. Dada la variable $numero, verifica si es múltipo de 7 usando un condicional if.<br>
    <?php
    $numero = rand(1, 100);
    if ($numero % 7 == 0) {
        echo "el numero $numero es multiplo de 7<br>";
    } else {
        echo "el numero $numero no es multiplo de 7 <br>";
    }
    ;
    ?>
    2. Utiliza un bucle for para imprimir los números del 0 al -10.<br>
    <?php
    for ($i = 0; $i >= -10; $i--) {
        echo "$i<br>";
    }
    ;
    ?>
    3. Dada la variable $edad, verifica si una persona es menor de edad (menos de 18 años) usando un condicional if.<br>
    <?php
    $edad = rand(-10, 150);
    if ($edad > 0 && $edad <= 120) {
        if ($edad >= 18) {
            echo "$edad es mayor de edad<br>";
        } else {
            echo "$edad es menor de edad<br>";
        }
        ;
    } else {
        echo "la  edad $edad no es valido<br>";
    }
    ; ?>
    4. Utiliza un bucle while para imprimir los números del 10 al 1 en orden descendente.<br>
    <?php
    $a = 10;
    while ($a >= 1) {
        echo "$a <br>";
        $a--;
    }
    ;
    ?>
    5. Dada la variable $diaSemana, utiliza una estructura switch para imprimir el nombre del día de la semana
    correspondiente.<br>
    <?php
    $diaSemana = rand(1, 7);
    switch ($diaSemana) {
        case '1':
            echo "lunes<br>";
            break;
        case '2':
            echo "martes<br>";
            break;
        case '3':
            echo "miercoles<br>";
            break;
        case '4':
            echo "jueves<br>";
            break;
        case '5':
            echo "viernes<br>";
            break;
        case '6':
            echo "sabado<br>";
            break;
        case '7':
            echo "domingo<br>";
            break;
        default:
            echo "no es un dia valido<br>";
            break;
    }
    ;
    ?>
    6. Calcula el resultado de la suma de los números del 1 al 100 utilizando un bucle for.<br>
    <?php
    $j = 0;
    for ($i = 0; $i <= 100; $i++) {
        $j = $j + $i;
        echo "$j<br>";
    }
    ;
    ?>
    7. Dada la variable $temperatura, verifica si hace frío (menos de 10 grados), calor (más de 30 grados) o una
    temperatura agradable (entre 10 y 30 grados) usando un condicional if.<br>
    <?php
    $temperatura = rand(0, 50);
    if ($temperatura >= "30") {
        echo "hace $temperatura grados, hace calor <br>";
    } elseif ($temperatura > "10") {
        echo "hace $temperatura grados una temperatura agradable<br>";

    } else {
        echo "hace $temperatura grados, hace frio <br>  ";
    }
    ?>
    8. Utiliza un bucle while para imprimir los primeros 20 números pares positivos.<br>
    <?php
    $a = 0;
    while ($a <= 20) {
        if ($a % 2 == 0) {
            echo "$a<br>";
            $a++;
        }
        $a++;
    }
    ?>
    9. Dada la variable $mes, utiliza una estructura switch para imprimir la cantidad de días que tiene ese mes.<br>
    <?php
    $mes = "junio";
    switch ($mes) {
        case 'enero':
        case 'marzo':
        case 'mayo':
        case 'julio':
        case 'agosto':
        case 'octubre':
        case 'diciembre':
            echo "el mes de $mes tiene 31 dias <br>";
            break;
        case 'abril':
        case 'junio':
        case 'septiembre':
        case 'noviembre':
            echo "el mes de $mes tiene 30 dias <br>";
            break;
        case 'febrero':
            echo "el mes de $mes tiene 28 o 29 (en los años bisiestos) dias <br>";
            break;
        default:
            echo " el valor introducido no es un mes <br>";
            break;
    }
    ?>

    10. Calcula el factorial de un número dado (por ejemplo, 5) utilizando un bucle for.<br>
    <?php

    for ($i = 5; $i > 0; $i--) {
        for ($j = $i - 1; $j > 0; $j--) {
            $i = $i * $j;
        }
        echo "$i<br>";
        break;
    }
    ?>

    11. Dada la variable $nota, verifica si un estudiante aprobó (nota mayor o igual a 5) o reprobó (nota menor a 5)
    usando un condicional if.<br>
    <?php
    $nota = rand(0, 10);
    if ($nota >= 5) {
        echo "el estudiante aprobo, su nota fue $nota, enhorabuena!!<br>";
    } else {
        echo "el estudiante suspendio, su nota fue $nota, mejor suerte la proxima!!<br>";
    }
    ?>
    12. Utiliza un bucle while para imprimir los números impares del 1 al 50.<br>
    <?php
    $a = 0;
    while ($a <= 50) {
        if ($a % 2 == 1) {
            echo "$a<br>";
            $a++;
        }
        $a++;
    }
    ?>
    13. Dada la variable $producto de tipo string, utiliza una estructura switch para imprimir un mensaje según la
    categoría del producto (por ejemplo, "Electrónica", "Ropa", "Alimentos", "Libros", etc.).<br>
    <?php
    $producto = "queso";
    switch ($producto) {
        case 'queso':
        case 'mermelada':
        case 'nutella':
            echo "$producto pertenece a alimentacion <br>";
            break;
        case 'auriculares':
        case 'telefono':
        case 'consola':
            echo "$producto pertenece a electronica <br>";
            break;
        case 'vaqueros':
        case 'sudadera':
        case 'jersey':
            echo "$producto pertenece a ropa <br>";
            break;
        default:
            echo "no es un producto catalogado<br>";
            break;
    }
    ?>
    14. Calcula la suma de los números pares del 1 al 100 utilizando un bucle for y operadores aritméticos.<br>
    <?php
    $f = 0;
    for ($i = 0; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            $f = $f + $i;
        }
        ;
    }
    ;
    echo "la suma de los numeros pares del 1 al 100 es $f<br>";
    ?>

    15. Dada la variable $hora, verifica si es hora de desayunar (entre las 7 AM y las 9 AM), almorzar (entre las 12 PM
    y las 2 PM) o cenar (entre las 7 PM y las 9 PM) usando un condicional if.<br>
    <?php
    $hora = 8;
    if ($hora > 7 && $hora < 9) {
        echo "es hora de desayunar <br>";
    } elseif ($hora > 12 && $hora < 14) {
        echo "es hora de almorzar <br>";
    } elseif ($hora > 19 && $hora < 21) {
        echo "es hora de cenar <br>";
    } else {
        echo "no es hora de comer<br>";
    }
    ?>
    16. Utiliza un bucle while para imprimir los números del 1 al 20, pero omite el número 13.<br>
    <?php
    $a = 0;
    while ($a <= 20) {
        if ($a != 13) {

            echo "$a<br>";
            $a++;
        } else {
            $a++;
        }
    }
    ;
    ?>

    17. Dada la variable $mes, verifica si es un mes de invierno (diciembre, enero o febrero), primavera (marzo, abril o
    mayo), verano (junio, julio o agosto) u otoño (septiembre, octubre o noviembre) usando un condicional if.<br>
    <?php
    $mes = "enero";
    if ($mes == "diciembre" || $mes == "enero" || $mes == "febrero") {
        echo "estamos en invierno, en el mes de $mes<br>";
    } elseif ($mes == "marzo" || $mes == "abril" || $mes == "mayo") {
        echo "estamos en primavera, en el mes de $mes<br>";
    } elseif ($mes == "junio" || $mes == "julio" || $mes == "agosto") {
        echo "estamos en verano, en el mes de $mes<br>";
    } elseif ($mes == "septiembre" || $mes == "octubre" || $mes == "noviembre") {
        echo "estamos en otoño, en el mes de $mes<br>";
    } else {
        echo "no has pasado un mes valido<br>";
    }
    ;
    ?>
    18. Calcula el promedio de una serie de números almacenados en un arreglo utilizando un bucle for y operaciones
    aritméticas.<br>
    <?php
    $valores = array(8, 12, 16, 20);
    $f = 0;
    for ($i = 0; $i < count($valores); $i++) {
        $f = $f + $valores[$i];
    }
    $f = $f / count($valores);
    echo "$f<br>";
    ?>
    19. Dada la variable $calificacion, utiliza una estructura switch para imprimir la calificación correspondiente (A,
    B, C, D o F) según el rango de la calificación.<br>
    <?php
    $calificacion = 8;
    switch ($calificacion) {
        case 1:
        case 2:
        case 3:
        case 4:
            echo "su calificacion es F<br>";
            break;
        case 5:
        case 6:
            echo "su calificacion es D<br>";
            break;
        case 7:
        case 8:
            echo "su calificacion es C<br>";
            break;
        case 9;
            echo "su calificacion es B<br>";
            break;
        case 10;
            echo "su calificacion es A<br>";
            break;
        default:
            echo "no es una calificacion valida <br>";
        break;
    };
    ?>
    20. Utiliza un bucle while para imprimir los números del 1 al 100 que sean divisibles por 3 y 5 (múltiplos de 15).<br>
    <?php
        $a=0;
        while ($a <= 100) {
            if ($a%15==0) {
                echo "$a<br>";
                $a++;
            }else {
                $a++;
            };

        };
    ?>
</body>

</html>