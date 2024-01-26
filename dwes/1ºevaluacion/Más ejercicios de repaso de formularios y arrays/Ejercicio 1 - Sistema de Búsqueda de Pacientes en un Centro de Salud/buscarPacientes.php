<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Pacientes - Centro de Salud</title>
    </head>
    <body>
        <h2>Introduce el nombre o número de historial del paciente para buscar</h2>
        <form action="resultadosHistorial.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">&nbsp;&nbsp;&nbsp;
            <label for="numero">Numero de historial: </label>
            <input type="text" name="numero">
            <input type="submit" value="Buscar">
        </form>
    </body>
</html>