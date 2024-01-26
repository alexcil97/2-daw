<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<?php
  $biblioteca=array(
    $libro1=array(
      "titulo"=>"el quijote<br>",
      "autor"=>"miguel de cervantes<br>",
      "editorial"=>"anaya<br>",
      "año"=>"1999<br>",
      "en_prestamo"=>"si<br><br>"
    ),
    $libro2=array(
      "titulo"=>"hamlet<br>",
      "autor"=>"william shakespeare<br>",
      "editorial"=>"anaya<br>",
      "año"=>"1603<br>",
      "en_prestamo"=>"no<br><br>"
    ),
    $libro3=array(
      "titulo"=>"el señor de los anillos<br>",
      "autor"=>"J.R.R. Tolkien.<br>",
      "editorial"=>"	George Allen & Unwin
      HarperCollins<br>",
      "año"=>"1954<br>",
      "en_prestamo"=>"no<br><br>"
    )
  );
  echo "<pre>";
  print_r($biblioteca);
  echo "</pre>";
  
?>
</body>
</html>