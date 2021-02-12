const nome = "Rebeca"
const conc = "Olá " + nome + "!"
console.log(conc)
const template = `

    Olá
    ${nome}!`
console.log(conc, template)
console.log(`1 + 1 = ${1 + 1}`)

const up = texto => texto.toUpperCase()
console.log(`Ei... ${up('cuidado')}!`)