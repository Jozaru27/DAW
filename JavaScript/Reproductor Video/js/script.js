let reproduciendo = false;
let volumenAlmacenado = 0;

window.onload = () => {
    reanudarPausarButton.addEventListener("click", reanudarPausar);
    silenciarButton.addEventListener("click", silenciar);
    reiniciarButton.addEventListener("click", reiniciar);
    subirVolumenButton.addEventListener("click", subirVolumen);
    bajarVolumenButton.addEventListener("click", bajarVolumen);
    adelantarVideoButton.addEventListener("click", adelantarVideo);
    retrocederVideoButton.addEventListener("click", atrasarVideo);
}

function reanudarPausar() {
    if (!reproduciendo) {
        video.play();
        reproduciendo = true;
    } else {
        video.pause();
        reproduciendo = false;
    }
}

function silenciar() {
    if (video.volume > 0) {
        volumenAlmacenado = video.volume;
        video.volume = 0;
    } else if (video.volume === 0) {
        video.volume = volumenAlmacenado;
    }
}

function reiniciar() {
    video.load();
}

function subirVolumen() {
    video.volume += 0.05;
    video.volume = parseFloat(video.volume).toFixed(2);
}

function bajarVolumen() {
    video.volume -= 0.05;
    video.volume = parseFloat(video.volume).toFixed(2);
}

function adelantarVideo() {
    video.currentTime += 5;
}

function atrasarVideo(){
    video.currentTime -= 5;
}

