var numero = 50;
var factor = 2;
var descomposicion = [];

while (numero > 1) {
    if (numero % factor === 0) {
        descomposicion.push(factor);
        numero /= factor;
    } else {
        factor++;
    }
}

var mensaje = "Descomposición factorial de 50: " + descomposicion.join(' x ');
alert(mensaje);
