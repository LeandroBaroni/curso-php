<h1>Formulário</h1>
<form method="POST">
    <input type="hidden" name="id" value="3">
    <input type="text" name="name">
    <input type="password" name="senha">
    <textarea cols="30" rows="10" name="bio"></textarea>
    <div>
        <input type="radio" name="tipo" value="admin"> Admin
        <input type="radio" name="tipo" value="regular"> Regular
        <input type="radio" name="tipo"> Professor
    </div>
    <div>
        <input type="checkbox" name="ativo" value="ativo"> Ativo
    </div>
    <select name="estado">
        <option value="ac">Acre</option>
        <option value="ba">Bahia</option>
        <option value="ce">Ceará</option>
        <option value="to">Tocantins</option>
    </select>
    <br>
    <select name="estado" multiple size="5">
        <option value="js">Javascript</option>
        <option value="java">Java</option>
        <option value="c">C</option>
        <option value="php">PHP</option>
        <option value="go">GO</option>
    </select>
    <button formaction="http://localhost:3003/usuarios">Incluir</button>
    <button formaction="http://localhost:3003/usuarios/3">Alterar</button>
</form>

<style>
    textarea, input{
        display: block;
        margin-bottom: 10px;
    }

    input[type=radio], input[type=checkbox], select{
        display: inline;
    }
</style>