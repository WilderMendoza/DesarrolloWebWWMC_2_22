var num = document.getElementById('numero');
var res = document.getElementById('resultado')
var aux = 0;
var sum = 1;
    function numero(n){
        aux = aux*10+n;
    num.innerHTML = aux;
    }

    function calcular() {
for(let i=1; i<=aux; i++){
    sum = sum * i;
}
res.innerHTML = sum;
    }
    function limpiar(){
        num.innerHTML = " ";
        res.innerHTML = " ";
        aux = 0;
        sum = 1;
    }
