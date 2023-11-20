/* Cuando carga la página... */
/* Coge todos los elementos que tengan por id "video"... */
/* Les aplica la clase "video"... */
/* La clase video tiene asignada una rotación central completa...*/
/* Al cargar la página, los vídeos giran completamente */

window.onload = function load(){
    let videoElement = document.getElementById('video');
    videoElement.classList.add('video');
}