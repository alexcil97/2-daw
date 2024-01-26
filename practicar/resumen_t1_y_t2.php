<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    // global se usa dentro de una funcion para que su valor se vuelva "global" es decir que se pueda usar en cualquier parte del programa
    $miperro = "bulldog";
    $array_perro = array("lanbrador", "bulldog", "golden", "akita", "husky");

    function cambiaRaza()
    {
        global $miperro;
        $miperro = "labrador";
    }

    cambiaRaza(); // Cambiar la raza de la variable global
    echo "Mi perro es un " . $miperro; // Concatenar la cadena y mostrarla
    echo "<br>";


    // static se encarga de que una variable creada dentro de una funcion no se borre y se pueda reutilizar
    function verificarEdad()
    {
        static $edad_animal = 5;
        echo "la edad de mi perro es " . $edad_animal;
        $edad_animal++;
    }

    verificarEdad();
    echo "<br>";
    verificarEdad();
    echo "<br>";
    verificarEdad();
    echo "<br>";

    /*Tenemos dos modos de delimitar el código PHP con <?php?> o bien con <?...?> o <?=...?>*/


    //las variables son sensibles a mayusculas y minusculas.
    

    //php es un lenguaje debilmente tipado es decir no hace falta declarar el ->
    //->tipo de las variables ya que se hace cuando se les asigna un valor.
    
    //tambien se pueden declarar variables por referenncia a otras variables usando & ejemplo $miperro2 = &$miperro;
    
    /*
        $GLOBALS: contiene todas las variables globales definidas en el script
        $_SERVER: contiene las variables del servidor Web (cabeceras, rutas, etc.)
        $_REQUEST: contiene los datos enviados en un formulario HTML
        $_POST: contiene los datos enviados en un formulario HTML con
        method=”post”
        $_GET : contiene los datos enviados en un formulario HTML con method=”get”
        $_FILES: contiene variables proporcionadas por medio de ficheros
        $_ENV: contiene las variables proporcionadas por el entorno
        $_COOKIE: contiene las variables proporcionadas por cookies
        $_SESSION: contiene las variables registradas en la sesión del script
    */
    //al usar $GLOBALS[] el indice de es el nombre de la variable  sin $
    echo $GLOBALS["miperro"]; //asi estaria bien
    echo $GLOBALS[$miperro]; //asi estaria mal
    
    //las constantes no van precedidas del simbolo $ y sigue la misma norma que variable debe empezar por letra o _
    //se pueden definir tanto usando: define(string nombre, mixed valor) o con la plabara reservada const
    //ejemplos:
    define("constante1", "hola");
    const constante2 = "mundo";
    echo constante1 . " " . constante2;
    echo "<br>";
    //tambien puedes usar constant OJO CONSTANT que NO const para ver  el valor de una constante ya definida
    echo constant("constante1") . "<br>"; //asi estaria bien
    //echo constant(constante1)."<br>";//mal ya que no lleva comillas
    constant("constante1"); //mal por que recupera el valor pero no hace nada con el va con un echo siempre
    
    //echo y print van sin parentesis y no se usan para arrays, funciones ni objetos directamente, si los quieres usar deberia ser->
    //-> echo "valor_array[1]"."valor_array[2]".etc...;
    echo $miperro; //esto estaria bien
    echo ($miperro); //esto estaria mal
    echo ($array_perro); //esto estaria mal, daria un warning indicandote que no se puede hacer la conversion de array a string.
    

    //print_r(): visualiza el contenido de una variable string, integer o float 
    $escierto = array(true, false, true, true);
    echo "<pre>";
    print_r($escierto); //si intentamos mostrar un boolean con print r nos muestra 1 o (0-null) en vez de true o false.
    echo "</pre>";
    //var_dump(): es una funcion que visualizas el tipo y valor de una variable
    echo "<pre>";
    var_dump($escierto); //en cambio con var_dump si nos muestra.
    echo "</pre>";


    //IMPORTANTE: las palabras reservadas no se pueden usar como constantes, nombres de clase, nombres de funciones o de metodos
    //PERO SI como nombres de variables aunque no es para nada recomendable.
    
    //tipos de operadores que no son tan comunes y pueden caer:
    /*
        -$a ->negacion->el opuesto 
        $a===$b-> identidad-> para comparar si el valor y Tipo de los operandos es igual con == solo comparas valor
        $a!==$b->no identidad-> distinto si el valor o el tipo  de $ a es distitno de $b ejemplo String ="a"!==char="a" con "" daria que son iguales pero con este no por que son de otro tipo

    */
    //tipos de operadores logicos
    /* 
        $a and $b -> Y -> Cierto si $a y $b son ciertos
        $a or $b -> O -> Cierto si $a o $b son ciertos
        $a xor $b -> O -> excluyente Cierto si $a o $b son ciertos pero no ambos
        !$a -> NO -> Cierto si $a es falso
    */


    //require y require_once insertan el codigo contenido de un archivo externo en la posicion donde este ->
    //-> antes de ser ejecutado por el servidor, sino encuentra dicho archivo el programa devolvera un error y detendra la ejecucion
    //la diferencia es que require_once lo hace 1 sola vez por archivo es decir no puedes subir varias veces el mismo archivo mientras que->
    //->require puede subir varias veces el mismo archivo.
    
    //include y include_once insertan el codigo contenido de un archivo externo en la posicion donde este ->
    //-> antes de ser ejecutado por el servidor, sino encuentra dicho archivo el programa devolvera un warning pero seguira la ejecucion
    //la diferencia es que include_once lo hace 1 sola vez por archivo es decir no puedes subir varias veces el mismo archivo mientras que->
    //->include puede subir varias veces el mismo archivo.
    

    //funciones
    $valor1 = 3;
    $valor2 = 5;
    //- PHP soporta paso de parámetros por valor, por referencia y por defecto.
    //este caso es por valor
    function estoEsUnaFuncion($valor1, $valor2)
    {
        $valor1 = 8;
        $valor2 = 9;
        echo "la suma de " . $valor1 . " y de " . $valor2 . " es " . ($valor1 + $valor2);
    }
    //este caso es por referencia
    function estoEsUnaFuncion2(&$valor1, &$valor2)
    {
        $valor1 = 8;
        $valor2 = 9;
        echo "la suma de " . $valor1 . " y de " . $valor2 . " es " . ($valor1 + $valor2);
    }
    //este caso es por defecto
    function estoEsUnaFuncion3($valor1 = 3, $valor2 = 6)
    {
        echo "la suma de " . $valor1 . " y de " . $valor2 . " es " . ($valor1 + $valor2);
    }

    echo "en caso por valor aunque modificamos los valores dentro de la funcion<br>";
    estoEsUnaFuncion($valor1, $valor2);
    echo "<br>";
    echo "<br>";
    echo "una vez salimos de ella sino usamos global se ven como al principio<br>";
    echo "la suma de " . $valor1 . " y de " . $valor2 . " es " . ($valor1 + $valor2);
    echo "<br>";
    echo "<br>";
    echo "en caso por referencia en cambio si los modificamos dentro <br>";
    echo "<br>";
    echo "Actualmente los valores son: " . $valor1 . " y " . $valor2;
    echo "<br>";
    echo "pasarian a ser: ";
    estoEsUnaFuncion2($valor1, $valor2);
    echo "<br>";
    echo "<br>";
    echo "estos cambios se mantienen ya que se hacen sobre el valor original y no sobre una copia.<br>";
    echo "la suma de " . $valor1 . " y de " . $valor2 . " es " . ($valor1 + $valor2);
    echo "<br>";
    echo "<br>";
    echo "y en caso por default si no le pasamos nada por la zona de parametros el valor sera el que hayamos puesto en la declaracion<br>";
    estoEsUnaFuncion3();
    echo "<br>";
    echo "<br>";
    echo "y  los valores no cambiaran en el flujo principal";
    echo "la suma de " . $valor1 . " y de " . $valor2 . " es " . ($valor1 + $valor2);
    echo "<br>";
    echo "<br>";
    echo "aun asi podemos pasarle parametros para que funcione igual que uno por valor : <br>";
    estoEsUnaFuncion3($valor1, $valor2);

    //reglas automaticas  de conversion de tipos de datos:
    /* 
    - en operaciones logicas los datos null 0 y '0' sse consideran false
    ->cualquier otro dato es true incluido la cadena 'false'.
    
    -en operaciones aritmeticas las cadenas se intentan leer ->
    ->numeros sino se puede se convierten en 0, true se convi en 1 y false 0

    - ne operacioenes de comparacion si un operando es un numero el otro->
    -> tambien se convertira en un numero, solo si ambos son cadenas se->
    ->comparan como cadenas

    en operaciones de cadenas de caracteres null y false se convierten en ->
    -> '' y true se convierete en '1'.

    OPERACIONES ARITMETICAS CON ENTEROS:
    si el resultado esta en el rango de los enteros, se devuelve entero
    si el resultado sale de el rango de los enteros, se devuelve float

    OPERACIONES ARITMETICAS DE ENTEROS CON FLOAT:
    el resultado es float.
    operaciones aritmeticas con cadenas
    si cadena comienza con digitos, los extrae y opera con ello como entero
    si cadena no comienza con digitos toma el valor 0

    Operaciones aritmeticas con booleanos:
    true lo toma como 1 y false como 0
    operaciones de concat devuelven tipo string
    los numeros enteros y reales se convierten en cadena
    valor booleano true se convierte en cadena '1' y false en cadena vacia


    operaciones de comparacion:
    NUMEROS: el 0 lo toma como FALSE, otros valores los toma como TRUE
    CADENAS:la cadena vacia(sin contenido) la toma como false, el resto como true
    
    CASTING:
    el forzado explicito de tipos, establece el tipo para un dato sin tener
    -> en cuenta su contenido


    SYSTEMA HEREDOC
    basicamente una forma de poner string que en vez de comillas usa <<<


    FUNCION GETTYPE:
    devuelve un string con el tipo de dato recibido como argumento
    ej: echo gettype($var); imprime el tipo de dato de $var
    FUNCION SETTYPE:
    cambia el tipo de dato de una variable



    PRINTF:
    Imprimir texto a pantalla, permite formatear salida
    %s = String (cadena), %d = Decimal, %f = Float, %u = Unsigned decimal, %x
    */
    //sintax de printf "%010d",$variable el %0 indica que el
    // elemento separador sera el 0 y el 10d es cantidad elementos a mostrar
    // y la d es que son de tipo decimal
    echo "<br>";
    $probar = "alex";
    printf("%810s", $probar); //mal por que usas s si quieres%numero tienes que usar d para poder mostrarlo o %'numero
    //la %' indica que es un caracter mientras que sino lo pones es un int.
    echo "<br>";
    printf("%'--10d", $probar);
    echo "<br>";
    printf("%'*10d", $probar);
    $number = 3.14159265;
    printf("%.2f\n", $number); // Imprime "3.14" el .2f indica el numero de decimales.
    //Para el especificador s: actúa como un punto de corte, estableciendo un
    //límite máximo de caracteres para la cadena.
    $text = "Este es un ejemplo de una cadena larga";
    printf("%.10s", $text); // Imprime "Este es un"
    printf("%.10s…", $text); // Imprime "Este es un…"
    //printf("%.-10",$text); esto estaria mal en su lugar
    $text = "Este es un ejemplo de una cadena larga"; // Definimos la cadena de texto.
    
    $length = strlen($text); // Obtenemos la longitud de la cadena.
    
    if ($length > 10) { // Comprobamos si la longitud es mayor que 10.
        $last10 = substr($text, -10); // Si la longitud es mayor que 10, tomamos los últimos 10 caracteres de la cadena.
        printf("%.10s", $last10); // Imprimimos los últimos 10 caracteres con un límite de 10 caracteres.
    } else { // Si la longitud es igual o menor que 10:
        printf("%.10s", $text); // Imprimimos la cadena completa con un límite de 10 caracteres, lo que imprimirá la cadena completa si es corta.
    }

    echo "<br>";


    /*Existen dos sintaxis posibles: de llaves y de dos puntos. Ambas sintaxis
    producen los mismos resultados.*/
    echo "● Llaves<br>";
    $a = 8;
    $b = 6;
    if ($a > $b) {
        echo "a es mayor que b<br>";
    } elseif ($a == $b) {
        echo "a es igual que b<br>";
    } else {
        echo "a es menor que b<br>";
    }

    echo "● Dos puntos:<br>";

    if ($a > $b):
        echo $a . " es mayor que <br>" . $b;
    elseif ($a == $b): // Tenga en cuenta la combinación de las palabras.
        echo $a . " igual <br>" . $b;
    else:
        echo $a . " no es ni mayor ni igual a <br>" . $b;
    endif;

    echo "<br>";
    echo "Importante: Hay que tener en cuenta que elseif y else if serán considerados
    exactamente iguales sólamente cuando se utilizan llaves como en el ejemplo
    anterior. Al utilizar los dos puntos para definir las condiciones if/elseif, no debe
    separarse else if en dos palabras o PHP fallará con un error del intérprete.<br><br>";


    /*
        Operador ternario ?:
        condicion ? valor_si_condicion_TRUE : valor_si_condicion_FALSE
        Es un operador, y como tal devuelve un resultado (no ejecuta una instrucción).
    */
    echo "Ejemplo correcto:<br>";
    $edad = 17;
    echo "\$mensaje = \$edad >= 18 ? Mayor de edad : 'Menor de edad'<br>";
    echo $mensaje = " ";
    // También sería válido el siguiente código
    echo '$edad >= 18 ? "Mayor de edad" : "Menor de edad"<br>';
    echo "<br><br>";
    echo "Ejemplo incorrecto:<br>";
    $edad = 17;
    echo "\$edad>=18? echo 'Mayor de edad' : echo 'Menor de edad'<br><br>";
    // Este operador no ejecuta instrucciones"
    

    echo "Existen dos nomenclaturas posibles:<br><br> ● Con llaves:<br>
    while (condicion) {
    instrucciones_a_ejecutar_en_cada_iteración
    }";
    echo "<br><br>";
    echo"● Con dos puntos:<br>;
    while (condicion) :
    instrucciones_a_ejecutar_en_cada_iteración
    endwhile;";

    ?>
</body>

</html>