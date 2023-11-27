let reproduciendo = false;

window.onload = () => {
    reanudarPausarButton.addEventListener("click", reanudarPausar);
    silenciarButton.addEventListener("click", silenciar);
}

function reanudarPausar(){
    if (!reproduciendo){
        video.play();
        reproduciendo = true;
    } else {
        video.pause();
        reproduciendo = false;
    }
}

function silenciar(){
    video.volume = 0;
}