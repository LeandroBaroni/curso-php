//para incluir os aquivos json pelo terminal
//npm init -y
//npm i --save express@4.16.3 body-parser@1.18.2 -E
//instalar nodemon
//npm i --save-dev nodemon
//o terminal irá mostrar dados dos inputs feitos pelo formulário
//node server.js


const express = require('express')
const app = express()
const bodyParser = require('body-parser')

app.use(bodyParser.urlencoded({extended: true}))

app.post('/usuarios', (req, resp) => {
    console.log(req.body)
    console.log(req.query)
    resp.send('<h1>Parabéns. Usuário Incluido!!!</h1>')
})

app.post('/usuarios/:id', (req, resp) => {
    console.log(req.params.id)
    console.log(req.body)
    resp.send('<h1>Parabéns. Usuário Alterado!!!</h1>')
})

app.listen(3003)