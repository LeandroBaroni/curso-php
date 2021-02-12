const pessoa = {
    nome: 'Ana',
    idade: 25,
    endereco: {
        logradouro: 'ABC',
        numero: 1000
    }
}

const {nome, idade} = pessoa
console.log(nome, idade)
console.log(pessoa)
const {nome:n, idade: i} = pessoa
console.log(n, i)
const {sobrenome, bemHumorada = true} = pessoa
console.log(sobrenome, bemHumorada)

const {endereco: {logradouro, numero, cep}} = pessoa
console.log(logradouro, numero, cep)
