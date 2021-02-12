function tratarErro(e){
    //throw new Error('...')
    throw{
        name: erro.name
    }
}

function imprimirNome(obj){
    try{
        console.log(obj.name.toUpperCase() + '!!!' )
    }catch(e){
        tratarErro(e)
    }finally{
        console.log('Final')
    }
}

const obj = {nome: 'Roberto'}
imprimirNome(obj)