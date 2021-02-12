//funcao sem retorno
function imprimirSoma(a, b){
    console.log("Valor: ", a + b)
}

imprimirSoma(3, 8)

//funcao com retorno
function soma(a, b = 0){
    return a + b
}

console.log(soma(2,5))
console.log(soma(5))