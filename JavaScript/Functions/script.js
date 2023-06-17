//nomear função -> verbo + substantivo
/*let corSite = "Azul";

function resetaCor(){
    corSite = "";
};

console.log(corSite);
resetaCor();
console.log(corSite);*/

/*let corSite = "Azul";

function resetaCor(cor){
    corSite = cor;
};

console.log(corSite);
resetaCor("Vermelho");
console.log(corSite);*/

let corSite = "Azul";

function resetaCor(cor,tonalidade){
    corSite = cor + ' ' + tonalidade;
};

console.log(corSite);
resetaCor("Vermelho","Escuro");
console.log(corSite);