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

    // EventListener para cada vez que se actualiza el tiempo actual del vídeo
    // Tiene una lógica similar a la de las funciones de los botones de Adelantar/Atrasar
    // Verifica - Si el currentTime es 0: deshabilita el botón de retroceso, si no, lo habilita
    // Verifica - Si el currentTime es >= a la duración del vídeo, deshabilita el botón de
    // adelantar, si no, lo habilita
    video.addEventListener("timeupdate", function() {
        if (video.currentTime === 0) {
            document.getElementById("retrocederVideoButton").disabled = true;
        } else {
            document.getElementById("retrocederVideoButton").disabled = false;
        }

        if (video.currentTime >= video.duration) {
            document.getElementById("adelantarVideoButton").disabled = true;
        } else {
            document.getElementById("adelantarVideoButton").disabled = false;
        }
    });

    // EventListener para habilitar/deshabilitar los botones de subir/bajar volumen
    // Tiene un funcionamiento similar al EventListener de arriba
    video.addEventListener("volumechange", function() {
        if (video.volume === 0) {
            document.getElementById("bajarVolumenButton").disabled = true;
            document.getElementById("subirVolumenButton").disabled = false;
            silenciarButton.innerText = "Desilenciar";
        } else {
            document.getElementById("bajarVolumenButton").disabled = false;
            document.getElementById("subirVolumenButton").disabled = false;
            silenciarButton.innerText = "Silenciar";
        }

        if (video.volume === 1) {
            document.getElementById("subirVolumenButton").disabled = true;
        }
    });

    let videos = document.querySelectorAll("#videos-recomendados video");
    for (video1 of videos){
        video1.addEventListener("click", cambiarVideo);
    }
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

// Función de reiniciar
// El vídeo vuelve a su inicio.
function reiniciar() {
    video.load();
    reproduciendo = false;
}

// Función de subir el volumen
// Sube el volumen con incremento de 0.05 redondeado para evitar problemas
function subirVolumen() {
    video.volume += 0.05;
    video.volume = parseFloat(video.volume).toFixed(2);
}

// Función de bajar el volumen
// Baja el volumen con decremento de 0.05 redondeado para evitar problemas
function bajarVolumen() {
    video.volume -= 0.05;
    video.volume = parseFloat(video.volume).toFixed(2);
}

// Función para adelantar el vídeo
// Adelanta el vídeo con incrementos de 5 segundos
function adelantarVideo() {
    video.currentTime += 5;
}

// Función para atrasar el vídeo
// Atrasa el vídeo con decremento de 5 segundos
function atrasarVideo(){
    video.currentTime -= 5;
}

function cambiarVideo(){
    reproduciendo = false;
    let aux = video.src;
    video.src = this.src;
    this.src = aux;
}

// areglar el primer addevent listener tocho para que parezca el segundo
// darle estilo a los botones, cambiar también los iconos

// añadir barra de progreso
// añadir popup