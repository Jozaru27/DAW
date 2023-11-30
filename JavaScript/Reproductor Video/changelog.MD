Antes de crear el EventListener te timeupdate, los botones de adelantar y deshabilitar se activaban desactivaban en las propias funciones, sin embargo, el problema de esto es que necesitabas activar las funciones para hacer las comprobaciones.

// Función de reiniciar
// El vídeo vuelve a su inicio.
function reiniciar() {
    video.load();
    // document.getElementById("adelantarVideoButton").disabled = false;
    // document.getElementById("retrocederVideoButton").disabled = true;
}

// Función para adelantar el vídeo
// Adelanta el vídeo con incrementos de 5 segundos
// Activa el botón de retroceder siempre, y si llega al máximo, desactiva el de adelantar
function adelantarVideo() {
    video.currentTime += 5;
    // document.getElementById("retrocederVideoButton").disabled = false;
    // if (video.currentTime >= video.duration) {
    //     document.getElementById("adelantarVideoButton").disabled = true;
    // }
}

// Función para atrasar el vídeo
// Atrasa el vídeo con decremento de 5 segundos
// Activa el botón de adelantar siempre, y si vuelve al principio, desactiva el de atrasar
function atrasarVideo(){
    video.currentTime -= 5;
    // document.getElementById("adelantarVideoButton").disabled = false;
    // if (video.currentTime <= 0) {
    //     document.getElementById("retrocederVideoButton").disabled = true;
    // }
}