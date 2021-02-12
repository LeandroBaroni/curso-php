//par nome/valor
const saudacao = 'Opa' //contexto lexico 1
function exec(){
    const saudacao = 'Falaaa' //contexto lexico 2
    return saudacao
}

//Objeto são grupos aninhados de pares nome/valor
const cliente = {
    nome: 'Pedro',
    idade: 32,
    peso: 90,
    endereco: {
        logradouro: 'Rua César Longe',
        numero: 123,
        cidade: 'Presidente Prudente'
    }
}
console.log(saudacao)
console.log(exec())
console.log(cliente)
