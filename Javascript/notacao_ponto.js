console.log(typeof console)
console.log(Math.ceil(6.1))

const v1 = {}
v1.nome = 'Bola'//esta é mais conveniente
//v1['nome'] = 'Bola2'
console.log(v1.nome)

function Obj(nome){
    this.nome = nome
    this.exec = function (){
        console.log('Exec...')
    }
}

const v2 = new Obj('Cadeira')
const v3 = new Obj('Mesa')
console.log(v2.nome)
console.log(v3.nome)
v3.exec()