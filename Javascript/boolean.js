let isAtivo = false
console.log(isAtivo)

isAtivo = true
console.log(isAtivo)

console.log(!isAtivo)
console.log(!!isAtivo)

console.log("Os verdadeiros")
console.log(!!3)
console.log(!!-1)
console.log(!!' ')
console.log(!![1])
console.log(!!Infinity)

console.log("Os falsos")
console.log(!!NaN)
console.log(!!0)
console.log(!!'')
console.log(!!Null)
console.log(!!undefined)
console.log(!![isAtivo = false])

let nome = 'Lucas'
console.log(nome || 'Desconhecido')
