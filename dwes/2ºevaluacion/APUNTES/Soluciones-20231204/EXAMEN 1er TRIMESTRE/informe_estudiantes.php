<html>
<head>
	<title>Leer array</title>
</head>
<body>
<?php
//Dado el siguiente array:

$estudiantes = array(
    "informatica" => array(
        "estudiante1" => array("id" => "INFO001", "nombre" => "Ana", "edad" => 22, "promedio" => 8.5),
        "estudiante2" => array("id" => "INFO002", "nombre" => "Juan", "edad" => 20, "promedio" => 7.8)
    ),
    "diseño" => array(
        "estudiante3" => array("id" => "DIS001", "nombre" => "María", "edad" => 21, "promedio" => 9.2),
        "estudiante4" => array("id" => "DIS002", "nombre" => "Carlos", "edad" => 23, "promedio" => 8.0)
    )
);
/*
Genera un array que visualice la información de la siguiente manera dinámica:

----- Informe de Estudiantes -----
[Estudiantes - informatica]
- INFO001, nombre: Ana, edad: 22, promedio: 8.5
- INFO002, nombre: Juan, edad: 20, promedio: 7.8

[Estudiantes - diseño]
- DIS001, nombre: María, edad: 21, promedio: 9.2
- DIS002, nombre: Carlos, edad: 23, promedio: 8.0
*/ ?>
<h1>----- Informe de Estudiantes -----</h1>

<div id="panel_central">
<?php
	foreach($estudiantes as $tipo => $alumnos) {
		echo "[Estudiantes - $tipo]<br/>";
		echo "<ul class='lista' id='lista_$tipo'>";
		foreach($alumnos as $clave => $datos) {
			echo "<li>{$datos["id"]}, nombe:" .$datos['nombre'] 
			.", edad:" .$datos["edad"] .", promedio:" .$datos["promedio"] ."</li>";
			echo "</li>";
		}
		echo "</ul>";
	}
?>
</div>
</body>
</html>