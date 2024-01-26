<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body class="calificacionesbody">
    <?php require "cabecera.php";
    function calculaNota($nota)
    {
        switch ($nota) {
            case '1':
            case '2':
            case '3':
            case '4':
                echo "insuficiente<br>";
                break;
            case '5':
                echo "suficiente<br>";
                break;
            case '6':
                echo "bien<br>";
                break;
            case '7':
            case '8':
                echo "notable<br>";
                break;
            case '9':
            case '10':
                echo "sobresaliente<br>";
                break;

            default:
            echo "no es una nota valida<br>";
            break;
        };
    };
    ?>
    <table class="calificaciones">
        <caption>estas son las calificaciones del alumno alex cil</caption>
        <tr>
            <th>asignatura</th>
            <th>nota</th>
            <th>valoracion</th>
        </tr>
        <tr>
            <td>inglés</td>
            <td><?php $nota=10; echo "$nota";?></td>
            <td><?php calculaNota($nota);?></td>
        </tr>
        <tr>
            <td>desarrollo de aplicaciones web en entorno servidor</td>
            <td><?php $nota=9; echo "$nota";?></td>
            <td><?php calculaNota($nota);?></td>
        </tr>
        <tr>
            <td>desarrollo de aplicaciones web en entorno cliente</td>
            <td><?php $nota=10; echo "$nota";?></td>
            <td><?php calculaNota($nota);?></td>
        </tr>
        <tr>
            <td>empresa e iniciativa emprendedora</td>
            <td><?php $nota=8; echo "$nota";?></td>
            <td><?php calculaNota($nota);?></td>
        </tr>
        <tr>
            <td>despliegue de interfaces web</td>
            <td><?php $nota=9; echo "$nota";?></td>
            <td><?php calculaNota($nota);?></td>
        </tr>
    </table>

    <?php require "footer.php"; ?>
</body>

</html>