<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" href="imagenes/logo.png">
  <title>index</title>
  <div>
    <img class="milogo" src="imagenes/logo.png" alt="logotipo">
    <a href="inicio.html">inicio</a>
    <a href="contacto.html">contacto</a>
  </div>
</head>

<body>
  <?php echo "la fecha de hoy es " .date ("d/m/y");
  echo "<br>";
  echo 3+2;
  echo 2+1;?>
  <table>
    <tr>
      <th> </th>
      <th>precio base</th>
      <th>precio avanzado</th>
      <th>precio premium</th>
    </tr>
    <tr>
      <td>precio joven</td>
      <td>10$</td>
      <td>15$</td>
      <td>20$</td>
    </tr>
    <tr>
      <td>precio adulto</td>
      <td>100$</td>
      <td>130$</td>
      <td>150$ </td>
    </tr>
  </table>
  <img src="imagenes/pcimagen.png" alt="Ordenador">
  <img src="imagenes/phpcode.png" alt="Codigo">
  <form action="registro.txt">
    <label for="name">ponga su nombre</label>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="mayoredad">eres mayor de edad? Si</label>
    <input type="checkbox" name="mayoredad" id="mayoredad">
    <label for="mayoredadno">No</label>
    <input type="checkbox" name="mayoredad" id="mayoredad">
    <br><br>
    <label for="enviar">si esta de acuerdo con los datos presione:</label>
    <input type="button" value="enviar">
    </form>
</body>
<footer>
  <p class="piedepagina">Alejandro Cil Jimenez 2023</p>
</footer>

</html>