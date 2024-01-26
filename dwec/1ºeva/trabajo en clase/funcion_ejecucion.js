var funcion = 'octaedro';
var arg = 'x';
var codigoFuncion = 'return (x * Math.sqrt(3))/10;'; // Corregir esta línea
window[funcion] = new Function(arg, codigoFuncion);

var resultado = window[funcion](10);
alert(resultado);
