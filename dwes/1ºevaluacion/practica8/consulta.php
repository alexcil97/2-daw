<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>consulta</title>
</head>

<body>
    <form action="" method="post">
        <fieldset style="width:25%;">
            <legend>formulario</legend>
            <!-- nombre -->
            <label for="name">nombre:</label><br>
            <input type="text" id="name" name="name" minlength="2" maxlength="20"><br><br>
            <!-- tarjeta sanitaria -->
            <label for="nsanitario">numero sanitario</label>
            <input type="number" id="nsanitario" name="nsanitario" minlength="14" maxlength="14"><br><br>
            <!-- fecha de nacimiento -->
            <label for="fnacimiento">fecha nacimiento </label>
            <input type="date" id="fnacimiento" name="fnacimiento" min="1923-01-01"max="<?= date("Y-m-d") ?>"><br><br>
            <!-- eleccion de especialista -->
            <label for="especialista">especialista requerido:</label>
            <select name="medico" id="medico">
                <?php
                $especialista = array("neurologo", "cirujano", "traumatólogo");
                for ($i = 0; $i < count($especialista); $i++) {
                    echo '<option value="$i">' . "$especialista[$i]</option>";
                }
                ;
                ?>
            </select><br><br>
            <!-- fecha de la cita -->
            <label for="cita">fecha de la cita</label><br>
            <input type="date" id="fconsulta" name="fconsulta" min="<?= date("Y-m-d",strtotime('+ 2 Days')) ?>"><br><br>
            <!-- acuerdo de usuario -->
            <p style="display:inline;">Lee el </p><a href="">Acuerdo de licencia de usuario</a><br><br>
            <p style="display:inline;"> Aceptar:</p><input type="checkbox" id="aceptaracuerdo" name="aceptaracuerdo"><br><br>
            <!-- boton de envio -->
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>

</html>