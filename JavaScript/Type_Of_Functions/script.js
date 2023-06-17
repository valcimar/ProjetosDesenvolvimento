//Existem basicamente 2 tipos de função: a que não devolve nada e a que retorna valor

//Realiza tarefa, mas não devolve nada
function dizerNome(){
    console.log("Valcimar");
}

dizerNome();

//Retorna Valor
function calculaValor(valor){
    return valor*2;
}

let resultado = calculaValor(10);

console.log(resultado);