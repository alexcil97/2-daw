var numero=7;
var contador=0;
for (var i = 0; i < 10; i++) {
    if(i==1 || i==numero){
        continue;
    }else{if(numero % i ==0){
        contador++;
    }
}
        
}
if (contador!=0) {
    alert('el numero no es primo');
}else{
    alert('el numero es primo');
}
var num=(50%7);
alert(num);