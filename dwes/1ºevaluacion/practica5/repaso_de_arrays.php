<!DOCTYPE html>
<html lang="es">

<head>
    <title>repaso de arrays</title>
</head>

<body>
    <?php
    echo "//////////////////practica 1///////////<br><br>";
    $temperatura = array(
        78,
        60,
        62,
        68,
        71,
        68,
        73,
        85,
        66,
        64,
        76,
        63,
        75,
        76,
        73,
        68,
        62,
        73,
        72,
        65,
        74,
        62,
        62,
        65,
        64,
        68,
        73,
        75,
        79,
        73
    );

    $a = 0;
    for ($i = 0; $i < count($temperatura); $i++) {
        $a = $a + $temperatura[$i];
    }
    ;
    echo "$a<br>";
    $a = $a / count($temperatura);
    echo "media:";
    echo "$a<br>";
    echo "ordenado de menor a mayor:<br>";
    $temperatura = array_unique($temperatura);
    sort($temperatura);
    for ($i = 0; $i < 5; $i++) {
        echo "$temperatura[$i]<br>";
    }
    ;
    rsort($temperatura);
    echo "ordenado de mayor a menor: <br>";
    for ($i = 0; $i < 5; $i++) {
        echo "$temperatura[$i]<br>";
    }
    echo "<br>";
    echo "<br><br>///////////////////Practica2////////////////<br><br>";

    $ceu = array(
        "Italia" => "Roma",
        "Luxemburgo" => "Luxemburgo",
        "Bélgica" => "Bruselas",
        "Dinamarca" => "Copenhague",
        "Finlandia" => "Helsinki ",
        "Francia" => "París",
        "Eslovaquia" => "Bratislava",
        "Eslovenia" => "Ljubljana",
        "Alemania" => "Berlín",
        "Grecia" => "Atenas",
        "Irlanda" => "Dublín",
        "Países Bajos" => "Ámsterdam",
        "Portugal" => "Lisboa",
        "España" => "Madrid",
        "Suecia" => "Estocolmo",
        "Reino Unido" => "Londres ",
        "Chipre" => "Nicosia",
        "Lituania" => "Vilna",
        "República Checa" => "Praga",
        "Estonia" => "Tallin",
        "Hungría" => "Budapest",
        "Letonia" => "Riga",
        "Malta" => "Valetta",
        " Austria" => "Viena",
        "Polonia" => "Varsovia"
    );
    setlocale(LC_COLLATE, 'es_ES.utf8');
    ksort($ceu, SORT_LOCALE_STRING);
    foreach ($ceu as $key => $value) {
        echo "la capital de $key es $value<br>";
    }
    echo "<br>";
    echo "<br><br>///////////////////Practica3////////////////<br><br>";
    $beu = array("Elena" => "31", "Jacob" => "41", "Ana" => "39", "Ramesh" => "40");
    echo "orden ascendente por valor<br>";
    asort($beu);
    foreach ($beu as $key => $value) {
        echo "$value es la nota de $key<br>";
    }
    echo "<br>";
    echo "orden ascendete por clave<br>";
    ksort($beu);
    foreach ($beu as $key => $value) {
        echo "$key tiene de nota $value<br>";
    }
    echo "<br>";
    echo "orden descendente por valor<br>";
    arsort($beu);
    foreach ($beu as $key => $value) {
        echo "$value es la nota de $key<br>";
    }
    echo "<br>";
    echo "orden descendente por clave<br>";
    krsort($beu);
    foreach ($beu as $key => $value) {
        echo "$key tiene de nota $value<br>";
    }
    echo "<br>";
    echo "<br><br>///////////////////Practica4////////////////<br><br>";
    echo "ordenar array de manera numerica<br><br>";
    function ordenarArrayNumerico($array_numerico)
    {
        if (isset($array_numerico)) {
            if (empty($array_numerico)) {
                echo "no se puede ordenar, el array esta vacio<br>";
            } else {
                sort($array_numerico);
                echo "array ordenado correctamente <br>";
                return $array_numerico;
            }
            echo "no existe el array <br>";
        }
    }
    $array_numerico = array(4, 3, 1, 2, 5, 8, 6, 7, 9);
    $array_numerico_ordenado = ordenarArrayNumerico($array_numerico);
    echo "<pre>";
    print_r($array_numerico_ordenado);
    echo "</pre>";
    echo "ordenar un array de Strings<br>";
    function ordenarArrayStrings($array_strings)
    {
        if (isset($array_strings)) {
            if (empty($array_strings)) {
                echo "el array no se puede ordenar por que esta vacio<br>";
            } else {
                sort($array_strings);
                echo "array de strings ordenado correctamente <br>";
                return $array_strings;
            }
        } else {
            echo "el array no existe<br>";
        }
    }
    $array_strings = array("Alex", "David", "Juan", "Clara", "Irene");
    $array_strings_ordenado = ordenarArrayStrings($array_strings);
    echo "<pre>";
    print_r($array_strings_ordenado);
    echo "</pre>";
    echo "funcion para sumar todos los valores de una matriz(array)<br>";
    function sumarValoresMatriz($matrizASumar)
    {
        if (isset($matrizASumar)) {
            if (empty($matrizASumar)) {
                echo "la matriz esta vacia";
            } else {
                $suma = 0;
                for ($i = 0; $i < count($matrizASumar); $i++) {
                    $suma = $suma + $matrizASumar[$i];
                }
                return $suma;
            }
        } else {
            echo "la matriz no existe";
        }
    }
    $matrizASumar = array(11, 6, 9, 3, 24, 5);
    $matrizSumada = sumarValoresMatriz($matrizASumar);
    echo "el valor de la matriz sumada es: ";
    print_r($matrizSumada);
    echo "<br>";
    echo "funcion para imprimir cuadricula<br>";
    function imprimirCuadricula($modelo_cuadricula, $n_columnas, $n_filas)
    {
        if (isset($modelo_cuadricula, $n_columnas, $n_filas)) {
            if (empty($modelo_cuadricula) || empty($n_filas) || empty($n_columnas)) {
                echo "no puedes dibujar una cuadricula por que el modelo esta vacio o no indicaste numero filas o columnas<br>";
            } else {
                for ($i = 0; $i < $n_filas; $i++) {
                    for ($j = 0; $j < $n_columnas; $j++) {
                        echo "$modelo_cuadricula";
                    }
                    echo "<br>";
                }
            }

        } else {
            echo "no existe modelo para crear la plantilla o no se especifico el nunero de filas o columnas";
        }
    }
    $modelo_cuadricula = "-";
    $n_columnas = "8";
    $n_filas = "5";
    imprimirCuadricula($modelo_cuadricula, $n_columnas, $n_filas);
    echo "<br>";
    echo "Funcion para calcular el valor promedio de los elementos de una matriz<br>";
    function matrizPromedio($matriz_promedio)
    {
        if (isset($matriz_promedio)) {
            if (empty($matriz_promedio)) {
                echo "la matriz de la que sacar el promedio esta vacia<br>";
            } else {
                $matriz_promedio_resultado = "0";
                for ($i = 0; $i < count($matriz_promedio); $i++) {
                    $matriz_promedio_resultado = $matriz_promedio_resultado + $matriz_promedio[$i];
                }
                $matriz_promedio_resultado = $matriz_promedio_resultado / count($matriz_promedio);
                return $matriz_promedio_resultado;
            }
        } else {
            echo "la matriz para sacar promedio no existe<br>";
        }
    }
    $matriz_promedio = array(5, 10, 15, 20, 25);
    $matriz_promedio_resultado = matrizPromedio($matriz_promedio);
    echo " el valor promedio es $matriz_promedio_resultado";
    echo "<br>";
    echo "";
    echo "funcion para verificar si un array contiene un valor especifico<br>";
    function verificarValor($array_busqueda_valor, $valor_a_buscar)
    {
        if (isset($array_busqueda_valor)) {
            if (empty($array_busqueda_valor)) {
                echo "se siente haberte espabilado antes<br>";
            } else {
                $contador = 0;
                for ($i = 0; $i < count($array_busqueda_valor); $i++) {
                    if ($array_busqueda_valor[$i] == $valor_a_buscar) {
                        $contador++;
                        echo "el valor existe es: ", "$array_busqueda_valor[$i]", " que es igual a $valor_a_buscar y las veces que se repite: $contador <br>";
                    }
                }
                if ($contador == 0) {
                    echo "el valor no se halla en el array<br>";
                }
                return 0;
            }
        } else {
            echo "no le decimos nada y lo sustituimos por otra cosa<br>";
        }
    }
    $array_busqueda_valor = array(5, 10, 15, 20, 0);
    $valor_a_buscar = 5;
    $array_valor_buscado = verificarValor($array_busqueda_valor, $valor_a_buscar);
    echo "funcion para encontrar indice en un array<br>";
    function encontrarIndiceArray($array_indice, $array_indice_eleccion)
    {
        if (isset($array_indice)) {
            if (!empty($array_indice)) {
                $contador = 0;
                echo "<pre>";
                print_r($array_indice);
                echo "</pre>";
                for ($i = 0; $i < count($array_indice); $i++) {
                    if ($array_indice_eleccion == $array_indice[$i]) {
                        echo "el indice del valor $array_indice_eleccion es [$i]<br>";
                        $contador++;
                    }
                }
                if ($contador == 0) {
                    echo "el valor no se encuentra en el array o no se puede recuperar su indice<br>";
                }
            } else {
                echo "el array esta vacio<br>";
            }
        } else {
            echo "no existe el array o no se pudo recuperar<br>";
        }
        ;

    }
    $array_indice = array(12, 5, 7, 9, 7);
    $array_indice_eleccion = 9;
    encontrarIndiceArray($array_indice, $array_indice_eleccion);
    echo "<br>";
    echo "funcion para eliminar elemento especifico del array<br>";
    function eliminarElementoArray($array_prueba_eliminar_valor, $valor_a_borrar)
    {
        if (isset($array_prueba_eliminar_valor)) {
            if (!empty($array_prueba_eliminar_valor)) {
                for ($i = 0; $i < count($array_prueba_eliminar_valor); $i++) {
                    if ($valor_a_borrar == $array_prueba_eliminar_valor[$i]) {
                        array_splice($array_prueba_eliminar_valor, $i, 1);
                    }
                }
                echo "<pre>";
                print_r($array_prueba_eliminar_valor);
                echo "</pre>";
            } else {
                echo "el array esta vacio<br>";
            }

        } else {
            echo "el array no existe o no se pudo encontrar<br>";
        }
        ;
    }
    $array_prueba_eliminar_valor = array(2, 4, 6, 8, 10, 12);
    $valor_a_borrar = 6;
    eliminarElementoArray($array_prueba_eliminar_valor, $valor_a_borrar);
    echo "<br>";
    echo "función para copiar una matriz iterando la matriz.<br>";
    function copiarMatriz($matriz_a_copiar)
    {
        if (isset($matriz_a_copiar)) {
            if (!empty($matriz_a_copiar)) {
                $tamanio_matriz_copia = count($matriz_a_copiar);
                $matriz_copiada = [$tamanio_matriz_copia];
                for ($i = 0; $i < count($matriz_a_copiar); $i++) {
                    $matriz_copiada[$i] = $matriz_a_copiar[$i];
                }
                echo "<pre>";
                print_r($matriz_a_copiar);
                echo "</pre>";
                echo "<pre>";
                print_r($matriz_copiada);
                echo "</pre>";
            } else {
                echo "la matriz esta vacia no se puede copiar<br>";
            }
        } else {
            echo "la matriz no existe<br>";
        }
        ;
    }
    $matriz_a_copiar = array(5, 20, 35, 50, 80, 100);
    copiarMatriz($matriz_a_copiar);
    echo "<br>";
    echo "funcion para insertar elemento en posicion concreta del array <br>";
    function insertarElementoArray($array_para_insertar_elemento, $elemento_para_insertar)
    {
        if (isset($array_para_insertar_elemento) && isset($elemento_para_insertar)) {
            if (!empty($array_para_insertar_elemento) && !empty($elemento_para_insertar)) {
                echo "<pre>";
                print_r($array_para_insertar_elemento);
                echo "</pre>";
                $posicion = 2;
                array_splice($array_para_insertar_elemento, $posicion, 0, $elemento_para_insertar);
                echo "<pre>";
                print_r($array_para_insertar_elemento);
                echo "</pre>";
            } else {
                echo "error: el elemento esta vacio o el array<br>";
            }
        } else {
            echo "no existe o el array al que se desea insertar valor o el valor<br>";
        }
    }
    $array_para_insertar_elemento = array(7, 14, 21, 28, 35, 42, 49, 56, 63, 70);
    $elemento_para_insertar = 25;
    insertarElementoArray($array_para_insertar_elemento, $elemento_para_insertar);
    echo "<br>";
    echo "encontrar el valor maximo y minimo de un array<br>";
    function valorMaxMinArray($array_valor_max_y_min)
    {
        if (isset($array_valor_max_y_min)) {
            if (!empty($array_valor_max_y_min)) {
                $valor_min= $array_valor_max_y_min[0];
                $valor_max=$array_valor_max_y_min[0];
                foreach ($array_valor_max_y_min as $posicion => $value) {
                    echo "posicion ".$posicion." valor: ".$value,"<br>";
                    if ($value<$valor_min) {
                        $valor_min=$value;
                    }
                    if($value>$valor_max){
                        $valor_max=$value;
                    }
                }
                echo "el valor mas pequeño del array es ".$valor_min."<br>";
                echo "el valor mas grande del array es ".$valor_max."<br>";
            } else {
                echo "el array esta vacio";
            }
        }
    }
    $array_valor_max_y_min = array(3, 6, 9, 12, 15, 18, 21, 24, 27, 30);
    valorMaxMinArray($array_valor_max_y_min);
    ?>
</body>

</html>