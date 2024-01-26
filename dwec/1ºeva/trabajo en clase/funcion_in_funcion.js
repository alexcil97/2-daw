function sumar(a,b) {
    return a+b;
}
function restar(a,b) {
    return a-b;
}
function mostrar(operacion,a,b) {
    return (operacion(a,b));
}
a=8;
b=5;
alert(mostrar(restar,a,b));
alert(mostrar(sumar,a,b));


