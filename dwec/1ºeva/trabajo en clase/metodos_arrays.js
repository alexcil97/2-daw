var frutas = ['pera', 'manzana', 'naranja'];
var hortalizas = ['zanahoria', 'lechuga', 'pepino'];
var todoverde = frutas.concat(hortalizas);//junta dos arrays

function mostrarFrutas(fruta, index) {
    alert("Índice " + index + ": " + fruta);
}

frutas.forEach(mostrarFrutas);//rrecorre el array

var manzanaIndex = frutas.indexOf('manzana');//te devuelve la posicion
alert("Índice de 'manzana' en frutas: " + manzanaIndex);

alert(todoverde.join('-')); //escribe separadores
alert(todoverde.join('+'));
alert(todoverde.lastIndexOf("ara"));

var lastElement = todoverde.pop();//elimina elemento 
alert("Elemento eliminado de todoverde con pop: " + lastElement);

todoverde.push('tomate');
alert("todoverde después de push('tomate'): " + todoverde.join(', '));//inserta elemento

todoverde.reverse();
alert("todoverde después de reverse: " + todoverde.join(', '));//invierte un array

todoverde.shift();
alert("todoverde después de shift: " + todoverde.join(', ')); //shif elimina el primer elemento

todoverde.unshift("pera");
alert("todoverde después de unshift('pera'): " + todoverde.join(', ')); //recupera el elemento eliminado

var frutas2 = todoverde.slice(1, 3); //sustituye o añade un elemento
alert("frutas2 (slice): " + frutas2.join(', '));

for (let index = 0; index < todoverde.length; index++) {
    alert("Elemento en índice " + index + ": " + todoverde[index]);
}

alert("todoverde después de short (esto debería ser 'sort'): " + todoverde.join(', ')); //concatena strings y cosas

todoverde.splice(1, 0, "maiz");
alert("todoverde después de splice: " + todoverde.join(', '));
