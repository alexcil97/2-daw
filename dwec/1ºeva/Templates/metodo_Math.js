

base=8;
exponente=2;
valor=4;
function  PotenciaRaiz (base,exponente,valor){
    potencia = Math.pow(base,exponente);
    raiz = Math.sqrt(valor);
    return [potencia,raiz];
}

resultado =  PotenciaRaiz(base,exponente,valor);

alert("la potencia de 8 ^2 es: " + resultado[0] + "y la raiz cuadrada de 4 es: " + resultado[1]);