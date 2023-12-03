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
    // Al principio se llama a actualizarBarraProgreso, una función descrita más abajo
    video.addEventListener("timeupdate", function() {
        actualizarBarraProgreso();

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
            silenciarButton.style.backgroundImage = "url('img/unmute.png')";
        } else {
            document.getElementById("bajarVolumenButton").disabled = false;
            document.getElementById("subirVolumenButton").disabled = false;
            silenciarButton.style.backgroundImage = "url('img/mute.png')";
        }

        if (video.volume === 1) {
            document.getElementById("subirVolumenButton").disabled = true;
        }
    });

    let videos = document.querySelectorAll("#videos-recomendados video");
    for (video1 of videos){
        video1.addEventListener("click", cambiarVideo);
    }

    // Cuando se termina el video, limpia el valor de la barra de progreso (vuelve al principio)
    // Además, actualiza sus atributos al cambiar de video
    video.addEventListener("ended", function() {
        barraProgreso.value = 0;
        barraProgreso.max = video.duration;
        reproduciendo = false;
    });

    // Cuando haces click en la barra de progreso, el vídeo se mueve hasta ese punto
    barraProgreso.addEventListener("input", function() {
        video.currentTime = barraProgreso.value;
    });

    // Mostrar modal al cargar la página
    document.getElementById("myModal").style.display = "block";

    // Declarar el botón de cerrar
    let botonCerrar = document.querySelector(".close");
    let permitirClicar = false;

    // Mostrar X después de 10 segundos
    setTimeout(() => {
        permitirClicar = true;
        botonCerrar.style.opacity = "1"; // Cambia la opacidad de la "X" a 1
        botonCerrar.style.cursor = "pointer"; // Habilita el clic en la "X"
    }, 10000);

    // Si se clica en la x, desaparece el modal
    botonCerrar.onclick = () => {
        if (permitirClicar) {
            window.open('https://es.aliexpress.com/', '_blank');
            document.getElementById("myModal").style.display = "none";
            botonCerrar.style.opacity = "0"; // Cambia la opacidad de la "X" a 1
            botonCerrar.style.cursor = "default"; // Habilita el clic en la "X"
        }
    };
}

// Función para actualizar la barra de progreso
// Va actualizando la barra de progreso para que su valor sea el mismo que el valor de tiempo del video
// El máximo de la barra de progreso es igual a la duración máxima del vídeo
function actualizarBarraProgreso() {
    barraProgreso.value = video.currentTime;
    barraProgreso.max = video.duration;
}

// Función de Play/Pause
// Pausa/Reanuda la reproducción del vídeo
function reanudarPausar() {
    if (!reproduciendo) {
        video.play();
        reproduciendo = true;
        reanudarPausarButton.style.backgroundImage = "url('img/pause.png')";
    } else {
        video.pause();
        reproduciendo = false;
        reanudarPausarButton.style.backgroundImage = "url('img/play.png')";
    }
}

// Función de Mute
// Silencia/Desilencia el vídeo según el valor del volumen
// Guarda el valor del volumen cuando lo silencia, para volver a ese valor si se desilencia
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
    reanudarPausarButton.style.backgroundImage = "url('img/play.png')";
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
    let aux = video.src;
    video.src = this.src;
    this.src = aux;

    reproduciendo = false;
    reanudarPausarButton.style.backgroundImage = "url('img/play.png')";

    // Mostrar modal
    document.getElementById("myModal").style.display = "block";

     // Declarar el botón de cerrar
     let botonCerrar = document.querySelector(".close");
     let permitirClicar = false;
 
     // Mostrar X después de 10 segundos
     setTimeout(() => {
         permitirClicar = true;
         botonCerrar.style.opacity = "1"; // Cambia la opacidad de la "X" a 1
         botonCerrar.style.cursor = "pointer"; // Habilita el clic en la "X"
     }, 10000);
 
     // Si se clica en la x, desaparece el modal
     botonCerrar.onclick = () => {
         if (permitirClicar) {
            window.open('https://es.aliexpress.com/', '_blank');
             document.getElementById("myModal").style.display = "none";
             botonCerrar.style.opacity = "0"; // Cambia la opacidad de la "X" a 1
             botonCerrar.style.cursor = "default"; // Habilita el clic en la "X"
         }
     };
}


// estilo extra botones? 

// barra de progeso que aparezca cuando hover?

// maximizar video
// minimizar video


// boton de compartir
// boton miniatura

// boton de bucle
// color de la página

// Optimizar código del PopUp/Modal para simplificarlo