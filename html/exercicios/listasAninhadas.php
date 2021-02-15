<h1>Projeto</h1>
<ul class="tree">
    <li>
        <span wm-folder>backend</span>
        <ul>
            <li>
                <span wm-folder>app</span>
                <ul>
                    <li>produto.js</li>
                    <li>usuario.js</li>
                    <li>venda.js</li>
                </ul>
            </li>
            <li>
                <span wm-folder>config</span>
                <ul>
                    <li>bancos.js</li>
                    <li>rotas.js</li>
                    <li>servidor.js</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>
        <span wm-folder>frontend</span>
        <ul>
            <li>
                <span wm-folder>public</span>
                <ul>
                    <li>app.css</li>
                    <li>app.js</li>
                    <li>index.php</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
<link rel="stylesheet" href="http://files.cod3r.com.br/curso-web/tree.css">
<script>
    document.querySelectorAll('[wm-folder]').forEach(folder => {
        folder.onclick = function(e) {
            const ul = folder.nextElementSibling
            const d = ul.style.display
            ul.style.display = d === 'none' ? 'block' : 'none'
        }
    })
</script>