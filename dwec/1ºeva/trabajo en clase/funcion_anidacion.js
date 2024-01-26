function recibir(clave) {
    var numeros = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15'];//por que no te permite la sintaxis array()
    var longitudClave = clave.length;
  
    function descifrar() {
      var claveDescifrada = ''; //por que esto tiene que ser '' y no puede ser ni null ni dejarlo vacio
      var claveSecreta = ['10', '8', '6', '4', '2', '1', '3', '5', '7', '9', '15', '13', '11', '12', '14'];
  
      for (let index = 0; index < clave.length; index++) {
        claveDescifrada += numeros[claveSecreta.indexOf(clave[index])];
      }
  
      return claveDescifrada;
    }
  
    var secreto = descifrar();  // Llamar a la función descifrar y guardar el resultado en una variable.
    alert(secreto);  // Mostrar el resultado en un cuadro de alerta.
  
    return secreto;  // Devolver el resultado para poder utilizarlo más adelante.
  }
  
  var claveRecibida = ['1', '2', '3', '4', '5'];
  alert(recibir(claveRecibida));
  