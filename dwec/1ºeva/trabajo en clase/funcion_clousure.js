function masaMaximaCamion(cereal) {
    return function (kilos) {
      var imgSrc;
      var kilosNumeric = parseFloat(kilos); // Convierte la cadena a un número
  
      if (kilosNumeric === peso1) {
        imgSrc = "camion_vacio.png";
      } else if (kilosNumeric === peso2) {
        imgSrc = "camion_semivacio.png";
      } else if (kilosNumeric === peso3) {
        imgSrc = "camion_semilleno.png";
      } else if (kilosNumeric === peso4) {
        imgSrc = "camion_lleno.png";
      }
  
      // Crear una imagen y establecer su atributo src
      var img = document.createElement("img");
      img.src = imgSrc;
  
      // Agregar la imagen al DOM
      document.body.appendChild(img);
  
      document.getElementById("resultado").innerHTML = "Tipo de cereal: " + cereal + ", cantidad de cereal: " + kilos + " KG";
    };
  }
  
  var camion1 = masaMaximaCamion("cuetara flakes");
  var camion2 = masaMaximaCamion("chococrispies");
  var camion3 = masaMaximaCamion("cuetara");
  var camion4 = masaMaximaCamion("lion");
  
  var peso1 = 0;
  var peso2 = 20;
  var peso3 = 40;
  var peso4 = 60;
  
  // Llama a las funciones y muestra la información
  alert(camion1(peso1)); // Aquí pasamos el número sin " KG"
  alert(camion2(peso2));
  alert(camion3(peso3));
  alert(camion4(peso4));
  