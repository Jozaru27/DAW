// Variables de las letras
let ultimaLetra;
let letraIndividualDiv;
let letrasContainer;
let letrasUtilizadas = [];

//Array con las partes del cuerpo
let partesAhorcado = ["cabeza", "cuerpo", "brazoDer", "manoDer", "brazoIzq", "manoizq", "piernaDer", "pieDer", "piernaIzq", "pieizq"];
let partesMostradas = 0;

// Array con las películas Navideñas
let peliculasNavidenas = ["Solo en Casa", "La Navidad de Charlie Brown", "Klaus", "Polar Express", "Los padrinos de Tokio", "Eyes Wide Shut", "Jungla de Cristal", "Pesadilla antes de Navidad", "Batman vuelve", "Eduardo Manostijeras", "Gremlins", "Noche de paz Noche de muerte", "Muchas Gracias Mr Scrooge", "Un Padre en Apuros", "Santa Slay", "Los fantasmas atacan al jefe"];
let peliculaAleatoria;

// Score
let puntuacion = 0;

// Código que se ejecuta al iniciar la ventana.
// Oculta las partes, elige y carga una película, esconde las letras
window.onload = function() {
    var teclado = document.getElementById("teclado");
    for (let teclaActual = 65; teclaActual <= 90; teclaActual++) {
        tecla = document.createElement("button");
        tecla.innerText = String.fromCharCode(teclaActual);
        tecla.classList.add("tecla");
        tecla.addEventListener("click", pulsarLetra);
        teclado.appendChild(tecla);
    }
    
    ocultarTodo();
    ultimaLetra = document.getElementById('letra');
    letraIndividualDiv = document.getElementById('letraIndividualDiv');
    elegirPeliRandom();
    ponerPeli();
    letrasContainer = document.getElementsByClassName("letraPeli");
    letrasContainerUnitarias = document.getElementsByClassName("letraIndividual");
    ocultarLetras();
    partesMostradas = 0;

    let restartButton = document.getElementById("btnRestart");
    restartButton.addEventListener("click", reiniciarJuego);
}

// Event listener para poder usar el teclado
// Si es una letra, llama a la función con el valor de esa letra como inner.text
document.addEventListener('keydown', function(event) {
    if (/^[a-zA-Z]$/.test(event.key)) {
        pulsarLetra.call({ innerText: event.key });
    }
});

// Función que oculta todas las extremidades del Papá Noel
function ocultarTodo() {
    let classExtremidades = document.getElementsByClassName("extremidad");
    for (extremidad of classExtremidades) {
        extremidad.classList.add("ocultar");
    }
}
  
// Función para esconder las letras de la pantalla
function ocultarLetras() {
    for (letra of letrasContainer) {
        letra.classList.add("ocultarLetra");
    }
}

// Función para elegir una película aleatoria del array
function elegirPeliRandom() {
  let indiceAleatorio = Math.floor(Math.random() * peliculasNavidenas.length);
  peliculaAleatoria = peliculasNavidenas[indiceAleatorio];
}

// Función para cargar la película
// Con split divide la cadena del array de pelis, con map genera un array donde los mete cada div (con los strings). Con join se concatenan los elementos
function ponerPeli() {
    let cajaPelicula = document.getElementById("pelicula");

    cajaPelicula.innerHTML = peliculaAleatoria.split('').map(letra => {
      if (letra === " ") {
        return '<div class="letraPeliEspacio"></div>';
      } else {
        return `<div class="letraPeli">${letra}</div>`;
      }
    }).join('');
}

// Si la letra fue utilizada, cambia el estilo temporalmente avisando, pero no cuenta como una mala
// Si no ha sido utilizada, marca la letra presionada
function pulsarLetra() {
    let letrapulsada = this.innerText;

    if (letrasUtilizadas.includes(letrapulsada.toLowerCase())) {
        let letrasRepetidas = Array.from(letrasContainer).filter(letra => letra.innerText.toLowerCase() === letrapulsada.toLowerCase());

        for (let i = 0; i < letrasRepetidas.length; i++) {
            letrasRepetidas[i].classList.add("letraUtilizada", "fade-out");
            setTimeout(() => {
                letrasRepetidas[i].classList.remove("letraUtilizada", "fade-out");
            }, 2000); 
        }

        let letraPresionada = Array.from(letrasContainerUnitarias).find(letra => letra.innerText.toLowerCase() === letrapulsada.toLowerCase());
        if (letraPresionada) {
            letraPresionada.classList.add("letraUtilizada", "fade-out");
            setTimeout(() => {
                letraPresionada.classList.remove("letraUtilizada", "fade-out");
            }, 2000); 
        }
        return;
    }

    ultimaLetra.innerText = "Última Letra: " + letrapulsada;
    let valorLetraBase = 1000;
    let decremento = partesMostradas * 100;
    let valorLetra = Math.max(valorLetraBase - decremento, 0);

    let divletra = document.createElement("div");
    divletra.innerText = letrapulsada;
    divletra.classList.add("letraIndividual");
    letraIndividualDiv.appendChild(divletra);

    letrasUtilizadas.push(letrapulsada.toLowerCase());
    let letraAdivinada = false;

    for (letra of letrasContainer) {
        if (letra.innerText.toLowerCase() === letrapulsada.toLowerCase()) {
            if (letra.classList.contains("ocultarLetra")) {
                letra.classList.remove("ocultarLetra");
                puntuacion += valorLetra;
                letraAdivinada = true;
            }
        }
    }

    if (letraAdivinada) {
        document.getElementById("numeroScore").innerText = puntuacion.toString().padStart(5, '0');
    } else if (partesMostradas < partesAhorcado.length) {
        document.getElementById(partesAhorcado[partesMostradas++]).classList.remove("ocultar");
    }

    let letrasAdivinadas = Array.from(letrasContainer).filter(letra => !letra.classList.contains("ocultarLetra"));
    if (letrasAdivinadas.length === letrasContainer.length) {
        mostrarMensaje("¡Felicidades! Score: " + puntuacion, "white");
        desactivarJuego();
        return;
    }

    if (partesMostradas === partesAhorcado.length) {
        mostrarMensaje("No lo lograste... La película era: " + peliculaAleatoria, "white");
        desactivarJuego();
        return;
    }
}

// Función del mensaje de ganar/perder
function mostrarMensaje(mensaje, color) {
    let mensajeventana = document.getElementById("mensajeventana");
    let ventana = document.getElementById("ventana");
    let btnRestart = document.getElementById("btnRestart");

    mensajeventana.innerText = mensaje;
    mensajeventana.style.color = color;
    ventana.style.display = "block";

    btnRestart.onclick = function() {
        ventana.style.display = "none";
        reiniciarJuego();
    };
}

// Reinicia el juego - Restablece variables a 0, llama a funciones para ocultar al ahorcado, elegir una película aleatoria, cargarla, esconder la letra y reiniciar la puntuación
function reiniciarJuego() {
    puntuacion = 0;
    partesMostradas = 0;
    letrasUtilizadas = [];

    ocultarTodo();
    elegirPeliRandom();
    ponerPeli();
    ocultarLetras();

    document.getElementById("numeroScore").innerText = "00000";
    document.querySelector("body > div")?.remove();
    document.addEventListener('keydown', pulsarLetra);
    document.getElementById("teclado").style.pointerEvents = "auto";
    document.getElementById("letraIndividualDiv").innerHTML = ''; 
}

// Desactiva el event listener para introducir inputs por teclado y botones
function desactivarJuego() {
    document.removeEventListener('keydown', pulsarLetra);
    document.getElementById("teclado").style.pointerEvents = "none";
}