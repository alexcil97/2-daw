<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        div {
            position: relative;
            left: 1300px;
        }
    </style>
</head>

<body>
    <form action="salida.php" method="post">
        <div>
            <p>audio settings:</p>
            <input type="range" name="volumen" id="volumen" min="0" max="11">
            <label for="volumen">Volumen</label>
        </div>
        <h1>bienvenido a videojuegos.com</h1>
        <label for="usuario">Usuario:</label>&nbsp;&nbsp;
        <input type="text" name="usuario">
        <br><br>
        <label for="passwd">Contraseña:</label>&nbsp;&nbsp;
        <input type="password" name="passwd">
        <br><br>
        <label for="email">Correo electronico</label>&nbsp;&nbsp;
        <input type="email" name="email">
        <br><br>
        <label for="navegador">Seleccione su navegador:</label>
        <input list="navegadores" name="navegador" id="navegador">
        <datalist id="navegadores">
            <option value="chrome">
            <option value="firefox">
            <option value="edge">
            <option value="safari">
            <option value="opera">
        </datalist>
        <br><br>
        <label for="genero">Sexo:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="genero" id="genero">
            <option value="masculino">Hombre</option><br>
            <option value="femenino">Mujer</option><br>
        </select>
        <input type="submit" value="Enviar">



    </form>
</body>

</html>