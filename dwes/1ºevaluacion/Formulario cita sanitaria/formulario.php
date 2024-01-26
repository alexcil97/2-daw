<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form action="alta_cita.php" target=""method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" minlength="2" maxlength="20">
        <br><br>
        <label for="segsocial">Nº de seguridad social</label>
        <input type="text" name="segsocial" minlength=14 maxlength="14">
        <br><br>
        <label for="fnacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fnacimiento" min="1923-01-01" max="<?= date("Y-m-d") ?>">
        <br><br>
        <label for="especialistas">Especialistas:</label>
        <select name="especialistas" id="especialistas">
            <?php
            $especialistas = array("neurologo", "traumatologo", "dermatologo", "odontologo");
            foreach ($especialistas as $posicion => $oficio) {
                echo "<option value=".$oficio.">" ." $especialistas[$posicion]</option>";
            }
            ?>
        </select>
        <br><br>
        <label for="fcita">Fecha cita:</label>
        <input type="date" name="fcita" min="<?= date("Y-m-d", strtotime('+ 2 Days')) ?>">
        <br><br>
        <label for="politica">Desas aceptar la politica de privacidad:</label>&nbsp;&nbsp;
        <input type="radio" id="respuestasi" name="politica" value="si">
        <label for="respuestasi">Si</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" id="respuestano" name="politica" value="no">
        <label for="respuestano">No</label><br><br>
        <input type="submit" value="Enviar">


    </form>
</body>

</html>