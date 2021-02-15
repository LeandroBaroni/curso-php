<div wm-slider>
    <p>
        <img src="http://files.cod3r.com.br/curso-web/imagem1.jpg"
             alt="Muro da Cidade"
             width="513" height="342"
             title="Muro da Cidade por Tarso Bessa">
    </p>

    <p>
        <img src="http://files.cod3r.com.br/curso-web/imagem2.gif"
             alt="Intro Cod3r" height="342">
    </p>

    <p class="circular">
        <img src="http://files.cod3r.com.br/curso-web/imagem3.png"
             alt="Rio de Janeiro" height="342">
    </p>

    <p class="texto">
        <img src="http://files.cod3r.com.br/curso-web/avatar.jpg"
             alt="Avatar" height="50" align="left">
        Texto do lado do vatar da pessoa
        sdfsdf ds fsdf sdfsdf sdfsdf fssdsdf sdf sdfs df
        sd sdf sdfsdf sdf sdfsdf sdf sd fs f sdf er fw r sd fasd
        kjadshkjhd dkjheueuhek ekjhe kjehue ekjhe ekjh ekjheuekjhe
        ekjhekjhe ekjhe ehekjhekjhe kjeh e ekejhek jehe hekjhe ee
        ekjhe ee kjehkjhe kejhkjeh ee kejh e ekjhekjehe ekejhekejh
        ekjhekjhe e ekjheekjhe ehekjh ee kejhekjhekjhe e ekjhek ee
        ekjhekjh eee kjheekehekejhe e ekjehekhje ee
    </p>

    <p class="cidade"></p>

    <p>
        <picture>
            <source srcset="http://files.cod3r.com.br/curso-web/logo-larga.png"
                    media="(min-width: 600px)">
            <img src="http://files.cod3r.com.br/curso-web/logo-estreita.png" alt="Logo">
        </picture>
    </p>
</div>


<style>
    p {
        position: absolute;
        display: none;
    }

    .circular {
        width: 513px;
        background-color: #444;
    }



    .texto {
        width: 400px;
    }

    .texto img {
        margin-right: 10px;
    }

    .cidade {
        width: 513px;
        height: 342px;
        background-image: url('http://files.cod3r.com.br/curso-web/imagem4.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: 200%;
    }
</style>

<script>
    function mover(elem, inicio, fim, passo, callback) {
        const novoInicio = inicio - passo
        if(novoInicio >= fim) {
            elem.style.left = novoInicio + 'px'
            //vai passando de 7 em 7 segundos
            setTimeout(() => mover(elem, novoInicio, fim, passo, callback), 7)
        } else {
            callback()
        }
    }

    // const p = document.querySelector('[wm-slider] > p')
    // p.style.display = 'block'
    // mover(p, 1500, -520, 5, () => {
    //     console.log('Terminou!!!')
    // })

    function slider() {
        const elementos = document.querySelectorAll('[wm-slider] > p')
        const slides = Array.from(elementos)
        exibirSlide(slides, slides[0])
    }

    function exibirSlide(slides, slide) {
        slide.style.display = 'block'

        const inicio = innerWidth
        const fim = -slide.clientWidth

        slide.style.left = `${inicio}px`

        //velocidade do slider é 5
        mover(slide, inicio, fim, 5, () => {
            slide.style.display = 'none'
            exibirSlide(slides, getProximo(slides, slide))
        })
    }

    function getProximo(lista, atual) {
        const i = lista.indexOf(atual) + 1
        return i < lista.length ? lista[i] : lista[0]
    }

    slider()
</script>