<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    echo "/////////////ejercicio1////////<br>";
    echo "- Se pide: Imprimir el primer y último elemento del array.<br>";
    $personas = array("Leo", "Johan", "Karol", "Meryem", "Bryan");
    $ultimo = 0;
    $primero = $personas[0];
    foreach ($personas as $key => $value) {
        $ultimo = $value;
    }
    echo "el priemro es " . $primero . " y el ultimo " . $ultimo . "<br>";
    echo "el priemro es " . $personas[array_key_first($personas)] . " y el ultimo " . $personas[array_key_last($personas)] . "<br>";


    echo "/////////////ejercicio2////////<br>";
    echo "- Se pide: Ordenar el array en orden alfabético<br>";
    $colores = array("rojo", "verde", "azul", "índigo");
    setlocale(LC_COLLATE, 'es_ES.utf8');
    asort($colores, SORT_LOCALE_STRING);
    echo "<pre>";
    print_r($colores);
    echo "</pre>";
    echo "/////////////ejercicio3////////<br>";
    echo "- Se pide: Eliminar los elementos duplicados del array.<br>";
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva", "pera", "naranja");
    $personas = array_unique($frutas);
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo "/////////////ejercicio4////////<br>";
    echo "- Se pide: Contar cuántos estudiantes han aprobado.<br>";
    $estudiantes = array("Patrick" => "Aprobado", "María" => "Suspenso", "Carla" => "Aprobado");
    $contador = 0;
    foreach ($estudiantes as $persona => $nota) {
        if ($nota == "Aprobado") {
            $contador++;
        }
    }
    echo "el numero de alumnos aprobado es $contador<br>";
    echo "/////////////ejercicio5////////<br>";
    echo "- Se pide: Calcular el costo total de comprar una banana y dos manzanas.<br>";
    $precios = array("manzana" => 0.5, "banana" => 0.25, "uva" => 1.0);
    $costo = 0;
    foreach ($precios as $fruta => $valor) {
        if ($fruta == "manzana") {
            $costo += $valor * 2;
        }
        if ($fruta == "banana") {
            $costo += $valor;
        }
    }
    echo " el precio total es $costo<br>";
    echo "/////////////ejercicio6////////<br>";
    echo "- Se pide: Crear un nuevo array con los nombres de los equipos que tienen más de 2 campeonatos ganados.<br>";
    $equipos = array("Madrid" => 3, "Barcelona" => 2, "Valencia" => 1, "Vigo" => 4);
    $ganadores = array();
    foreach ($equipos as $participante => $campeonatosGanados) {
        if ($campeonatosGanados >= 2) {
            $ganadores = $participante;
        }
    }
    echo "<pre>";
    print_r($ganadores);
    echo "</pre>";

    echo "/////////////ejercicio7////////<br>";
    $nombres = array("Juan", "Marsha", "María", "Elena", "Ahmed", "Ling");
    echo "- Se pide: Imprimir los nombres que comienzan con la letra (M).<br>";
    foreach ($nombres as $email) {
        if (substr($email, 0, 1) == 'M') {
            echo "$email <br>";
        }
    }
    echo "/////////////ejercicio8////////<br>";
    $meses = array("enero", "febrero", "marzo", "abril", "mayo");
    echo "- Se pide: Crear un nuevo array con los meses que contienen la letra r<br>";
    $mesesConR = array();
    foreach ($meses as $mes) {
        if (strpos($mes, 'r')) {
            $mesesConR[] = $mes;
        }
    }
    echo "/////////////ejercicio9////////<br>";
    $notas = array(8, 7, 6, 9, 5);
    echo "- Se pide: Encontrar qué posición ocupa la nota más baja.<br>";
    $notaMasBaja = $notas[0];

    foreach ($notas as $posicion => $value) {
        if ($value <= $notaMasBaja) {
            $notaMasBaja = $value;
        }
    }
    foreach ($notas as $posicion => $value) {
        if ($value == $notaMasBaja) {
            echo "La nota mas baja se encuentra en la posicion $posicion<br>";
        }
    }
    echo "/////////////ejercicio10////////<br>";
    $calificaciones = array("Ahmed" => "A", "María" => "B", "Karol" => "C", "Myrna" => "A", "Luisa" => "A");
    echo "- Se pide: Crear un nuevo array con los nombres de los estudiantes que obtuvieron una calificación A <br>";
    $calificacionA = array();
    foreach ($calificaciones as $alumno => $nota) {
        if ($nota == "A") {
            $calificacionA[$alumno] = $nota;
        }
    }
    echo "<pre>";
    print_r($calificacionA) . "<br>";
    echo "</pre>";
    echo "/////////////ejercicio11////////<br>";
    $estudiantes = array("Yusuff" => array("matemáticas" => 90, "historia" => 85, "inglés" => 88), "María" => array("matemáticas" => 92, "historia" => 78, "inglés" => 95), "Carlos" => array("matemáticas" => 88, "historia" => 90, "inglés" => 92));
    echo "- Se pide: Encontrar el estudiante con el promedio de calificaciones más alto.<br>";
    echo "<pre>";
    print_r($estudiantes) . "<br>";
    echo "</pre>";
    $total = 0;
    $aux = 0;
    $nAsignaturas = 0;
    foreach ($estudiantes as $email => $promedio) {
        foreach ($promedio as $asignatura => $nota) {
            $total += $nota;


        }
        if ($total >= $aux) {
            $aux = $total;
        }
        echo $total . "<br>";
        echo $aux . " aux<br>";
        $total = 0;
    }
    $nAsignaturas = count($promedio);
    $total = $aux / $nAsignaturas;
    echo "el promedio mas alto es " . $total . "<br>";

    echo "/////////////ejercicio12////////<br>";
    $empleados = array("Juan" => array("salario" => 2500, "departamento" => "Ventas"), "María" => array("salario" => 3000, "departamento" => "Marketing"), "Karol" => array("salario" => 2800, "departamento" => "Ventas"));
    echo "- Se pide: Encontrar el nombre del empleado con el salario más alto en la empresa.<br>";
    $salario = 0;
    $empladoAdinerado;
    foreach ($empleados as $email => $infoEmpleado) {
        foreach ($infoEmpleado as $datos => $valores) {
            if ($datos == "salario") {
                if ($valores >= $salario) {
                    $salario = $valores;
                    $empladoAdinerado = $email;
                }
            }
        }
    }
    echo "el salario de $email es $salario y es el mas alto de la empresa<br>";

    echo "/////////////ejercicio13////////<br>";
    $frutas = array("manzana", "banana", "naranja", "manzana", "uva");
    echo "- Se pide: Contar cuántas veces aparece 'manzana' en el array.<br>";
    $contador = 0;
    foreach ($frutas as $posicion => $fruta) {
        if ($fruta == "manzana") {
            $contador++;
        }
    }
    echo "las veces que sale manzana son $contador<br>";
    echo "/////////////ejercicio14////////<br>";
    $notas = array(8, 7, 6, 9, 5);
    echo "- Se pide: Ordenar el array en orden ascendente y luego en orden descendente.<br>";
    sort($notas);
    echo " asi seria en ascendente <br>";
    echo "<pre>";
    print_r($notas);
    echo "</pre><br>";
    rsort($notas);
    echo " asi seria en descendente <br>";
    echo "<pre>";
    print_r($notas);
    echo "</pre><br>";
    echo "/////////////ejercicio15////////<br>";
    $estudiantes = array("Yusuff" => array("matemáticas" => 90, "historia" => 85, "inglés" => 88), "María" => array("matemáticas" => 92, "historia" => 78, "inglés" => 95), "Carlos" => array("matemáticas" => 88, "historia" => 90, "inglés" => 92));
    echo "- Se pide: Encontrar el estudiante con el promedio de calificaciones más bajo.<br>";
    $promedio = 9999999999;
    $sumaNotas = 0;
    $estudiantePromedioBajo = "";
    $nAsignaturas = 0;
    foreach ($estudiantes as $alumno => $datos) {
        foreach ($datos as $asignatura => $nota) {
            $sumaNotas += $nota;

        }
        if ($sumaNotas < $promedio) {
            $promedio = $sumaNotas;
            $estudiantePromedioBajo = $alumno;
        }
    }
    $nAsignaturas = count($datos);
    $promedio = $promedio / $nAsignaturas;
    echo "el alumno con el promedio mas bajo es $estudiantePromedioBajo y su nota es $promedio<br>";
    echo "/////////////ejercicio16////////<br>";
    $compras = array("producto1" => array("precio" => 20, "cantidad" => 2), "producto2" => array("precio" => 15, "cantidad" => 5), "producto3" => array("precio" => 10, "cantidad" => 3));
    echo "- Se pide: Calcular el costo total de las compras (precio por cantidad) para cada producto y el costo total de todas las compras.<br>";
    $costoTotal = 0;
    $costoProductoActual = 0;
    foreach ($compras as $producto => $datosProducto) {
        foreach ($datosProducto as $key => $value) {
            if ($key == "precio") {
                $costoProductoActual += $value;
                echo "entro en el 1<br>";
            }
            if ($key == "cantidad") {
                $costoProductoActual *= $value;
                echo "entro en el 2<br>";
            }
            echo "el costo total del $producto es $costoProductoActual<br>";
        }
        $costoTotal += $costoProductoActual;
        $costoProductoActual = 0;
    }
    echo "<br>El costo total de todos los productos es $costoTotal<br><br>";
    echo "/////////////ejercicio17////////<br>";
    $empleados = array(
        "Juan" => array("salario" => 2500, "departamento" => "Ventas"),
        "María" => array("salario" => 3000, "departamento" => "Marketing"),
        "Karol" => array("salario" => 2800, "departamento" => "Ventas"),
        "Sarah" => array("salario" => 2000, "departamento" => "Marketing")
    );
    echo "- Se pide: Calcular el salario promedio para cada departamento y la persona con mayor salario de la empresa.<br>";
    $array_departamentos = array();
    $departamento="";
    $salario=0;
    $salario_departamento=0;
    $salario_promedio=0;
    $salario_mas_alto=0;
    $salario_mas_alto_aux=0;
    $persona_sueldo_mas_alto="";
    foreach ($empleados as $email => $valoresEmpleado) {
        if (!in_array($valoresEmpleado["departamento"], $array_departamentos)) {
            $departamento = $valoresEmpleado["departamento"];
            $salario = $valoresEmpleado["salario"];
            if(!isset($array_departamentos[$departamento])){
                $array_departamentos[$departamento] = array();
            }
            $array_departamentos[$departamento][$email]=$salario;

            
        }
    }
    foreach ($array_departamentos as $departamento=> $datos) {
        foreach ($datos as $email => $sueldo) {
            
            $salario_departamento+=$datos[$email];
             $nDepartamentos = count($datos);
            $salario_mas_alto_aux=$sueldo;
            if($salario_mas_alto_aux>$salario_mas_alto){
                $salario_mas_alto = $salario_mas_alto_aux;
                $persona_sueldo_mas_alto=$email;
            }
            $salario_mas_alto_aux=0;

        }
        echo $salario_departamento."<br>";
        $salario_promedio=$salario_departamento/$nDepartamentos;
        echo "el promedio del departamento ". $departamento."  es $salario_promedio <br> ";
        $salario_promedio=0;
        $salario_departamento=0;
        echo"quesoto<br>";
      
    }
    echo " El empleado con el salario mas alto de la empresa es: $persona_sueldo_mas_alto con sueldo: $salario_mas_alto";
        
    echo "<pre>";
    print_r($array_departamentos);
    echo "</pre>";
    echo "/////////////ejercicio18////////<br>";
    $personas = array("Yusuff", "María", "Karol", "Ana", "Linda");
    echo"- Se pide: Encontrar el nombre más corto y el nombre más largo en el array.";


    echo "/////////////ejercicio19////////<br>";
    echo "/////////////ejercicio20////////<br>";
    echo "/////////////ejercicio21////////<br>";
    echo "/////////////ejercicio22////////<br>";
    echo "/////////////ejercicio23////////<br>";
    ?>

</body>

</html>