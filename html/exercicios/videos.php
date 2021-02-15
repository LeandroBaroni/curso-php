<video id="meuVideo" width="800" height="450" controls autoplay controlsList="nodownload">
    <source src="http://files.cod3r.com.br/curso-web/video.mp4" type="video/mp4">
    Seu browser não suporta a tag de vídeo.
</video>

<div wm-progresso="meuVideo" class="progresso">
    <div></div>
</div>

<div>
    <button wm-play="meuVideo">Play</button>
    <button wm-pause="meuVideo">Pause</button>
</div>

<style>
    .progresso {
        height: 20px;
        width: 500px;
        border: solid 1px #444;
        margin: 20px;
    }

    .progresso > div {
        background-color: red;
        color: #fff;
        height: 100%;
        text-align: right;
        font-size: 14px;
        width: 0%;
    }
</style>

<script>
    function configurarVideo(id) {
        const video = document.getElementById(id)
        video.oncontextmenu = () => false

        document.querySelector(`[wm-play=${id}]`).onclick = e => video.play()
        document.querySelector(`[wm-pause=${id}]`).onclick = e => video.pause()

        setInterval(() => {
            const percentual = (video.currentTime / video.duration) * 100
            const valorDiv = document.querySelector(`[wm-progresso=${id}] > div`)
            valorDiv.style.width = `${percentual}%`
            valorDiv.innerHTML = `${percentual.toFixed(1)}%`
        }, 500)
    }
    configurarVideo('meuVideo')
</script>