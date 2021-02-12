//armazenando funcao em um variavel
const imprimirSoma = function(a, b){
    console.log(a + b)
}
imprimirSoma(3, 6)

//Armazenando um funcao arrow
const soma = (a, b)=>{
    return a + b
}
console.log(soma(3,5))

//retorno implicito
const subtracao = (a, b) => a - b
console.log(subtracao(5, 9))