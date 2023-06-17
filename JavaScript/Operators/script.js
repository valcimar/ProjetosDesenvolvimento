//Operadores Aritiméticos(matemáticos) - + , - , * , / , **(exponecial)
let valor = 10;

console.log("Operadores Aritiméticos");

console.log(valor + valor);
console.log(valor - valor);
console.log(valor * valor);
console.log(valor / valor);
console.log(valor ** valor);

//++ e -- são de incremento e decremento
//para decremetar ou incrementar antes deve-se colocar o operador antes
console.log(++valor);
console.log(--valor);

//Operadores de atribuição
let valorTeclado = 100;

console.log("Operadores de Atribuição");
console.log(valorTeclado);

//valorTeclado = valorTeclado + valorTeclado
valorTeclado += valorTeclado;
console.log(valorTeclado);

//Operadores de Igualdade
//Igualdade estrita
console.log("Operadores de Igualdade estrita")
console.log(1 === 1);//além de comparar valor comprara tipo
console.log("1" === 1);

//Igualdade solta
console.log("Operadores de Igualdade solta")
console.log(1 == 1);//Compara apenas valor e converte tipo
console.log("1" == 1);