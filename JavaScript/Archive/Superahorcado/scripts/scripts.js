let ultimaLetra;
let contenedorLetraUnitaria;
let letrasContainer;
let letrasUtilizadas = [];
let peliculaAleatoria;
let puntuacion = 0;
//Array con las partes del cuerpo
let partesAhorcado = ["cabeza", "cuerpo", "brazoIzq", "brazoDer", "manoizq", "manoDer", "piernaIzq", "piernaDer", "pieizq", "pieDer"];
let partesMostradas = 0;

// Array con las películas Navideñas
let peliculasNavidenas = [
    "Mi Pobre Angelito",
    "El Expreso Polar",
    "Pesadilla Antes de Navidad",
    "Milagro en la Calle",
    "El Grinch",
    "Navidad en las Montañas",
    "Navidad con los Kranks",
    "Es un Hermoso Dia en el Vecindario",
    "El Regalo Prometido",
    "El Albergue de las Travesuras"
];

// Código que se ejecuta al iniciar la ventana.
// Oculta las partes, elige y carga una película, esconde las letras
window.onload = function() {
    var teclado = document.getElementById("teclado");
    for (let teclaActual = 65; teclaActual <= 90; teclaActual++) {
        tecla = document.createElement("button");
        tecla.innerText = String.fromCharCode(teclaActual);
        tecla.classList.add("tecla");
        tecla.addEventListener("click", clickar);
        teclado.appendChild(tecla);
    }
    ocultarTodo();

    ultimaLetra = document.getElementById('letra');
    contenedorLetraUnitaria = document.getElementById('contenedorLetraUnitaria');

    elegirPeliculaAleatoria();
    cargarPelicula();
    letrasContainer = document.getElementsByClassName("letraPeli");
    letrasContainerUnitarias = document.getElementsByClassName("letraUnitaria");
    esconderLetras();
    partesMostradas = 0;

    let restartButton = document.getElementById("btnRestart");
    restartButton.addEventListener("click", reiniciarJuego);
}

// Event listener para poder usar el teclado
// Si es una letra, llama a la función con el valor de esa letra como inner.text
document.addEventListener('keydown', function(event) {
    if (/^[a-zA-Z]$/.test(event.key)) {
        clickar.call({ innerText: event.key });
    }
});

// Función para elegir una película aleatoria del array
function elegirPeliculaAleatoria() {
  let indiceAleatorio = Math.floor(Math.random() * peliculasNavidenas.length);
  peliculaAleatoria = peliculasNavidenas[indiceAleatorio];
}

// Función para cargar la película
// Además al terminar una partida, no puede salir la misma película otra vez
function cargarPelicula() {
  let cajaPelicula = document.getElementById("pelicula");
  let cantidadDeLetras = peliculaAleatoria.length;

  while (cajaPelicula.firstChild) {
      cajaPelicula.removeChild(cajaPelicula.firstChild);
  }

  for (let i = 0; i < cantidadDeLetras; i++) {
      let div = document.createElement('div');
      div.classList.add("letraPeli");
      cajaPelicula.appendChild(div);
      div.innerText = peliculaAleatoria[i];

      if (peliculaAleatoria[i] === " ") {
          div.classList.remove("letraPeli");
          div.classList.add("letraPeliEspacio");
      }
  }
}

// Si la letra fue utilizada, cambia el estilo temporalmente avisando, pero no cuenta como una mala
// Si no ha sido utilizada, marca la letra presionada
function clickar() {
    let letrapulsada = this.innerText;
    if (letrasUtilizadas.includes(letrapulsada.toLowerCase())) {
        let letrasRepetidas = Array.from(letrasContainer).filter(letra => letra.innerText.toLowerCase() === letrapulsada.toLowerCase());

        for (let i = 0; i < letrasRepetidas.length; i++) {
            letrasRepetidas[i].classList.add("letraUtilizada");
            setTimeout(() => {
                letrasRepetidas[i].classList.remove("letraUtilizada");
            }, 1000);
        }

        let letraPresionada = Array.from(letrasContainerUnitarias).find(letra => letra.innerText.toLowerCase() === letrapulsada.toLowerCase());
        if (letraPresionada) {
            letraPresionada.classList.add("letraUtilizada");
            setTimeout(() => {
                letraPresionada.classList.remove("letraUtilizada");
            }, 1000);
        }
        return;
    }

    ultimaLetra.innerText = "Última letra usada: " + letrapulsada;
    let valorLetraBase = 1000;
    let decremento = partesMostradas * 100;
    let valorLetra = Math.max(valorLetraBase - decremento, 0);

    let divletra = document.createElement("div");
    divletra.innerText = letrapulsada;
    divletra.classList.add("letraUnitaria");
    contenedorLetraUnitaria.appendChild(divletra);

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
        let puntuacionFormateada = puntuacion.toString().padStart(5, '0');
        document.getElementById("numeroScore").innerText = puntuacionFormateada;
    } else {
        if (partesMostradas < partesAhorcado.length) {
            document.getElementById(partesAhorcado[partesMostradas]).classList.remove("ocultar");
            partesMostradas++;
        }
    }

    let letrasAdivinadas = Array.from(letrasContainer).filter(letra => !letra.classList.contains("ocultarLetra"));

    if (letrasAdivinadas.length === letrasContainer.length) {
        mostrarMensaje("¡Felicidades! Score: " + puntuacion, "green");
        desactivarJuego();
        return;
    }

    if (partesMostradas === partesAhorcado.length) {
        mostrarMensaje("No lo lograste... La película era: " + peliculaAleatoria, "red");
        desactivarJuego();
        return;
    }
}

// Función del mensaje de ganar/perder
function mostrarMensaje(mensaje, color) {
    let mensajeModal = document.getElementById("mensajeModal");
    mensajeModal.innerText = mensaje;
    mensajeModal.style.color = color;

    let modal = document.getElementById("modal");
    modal.style.display = "block";

    let btnRestart = document.getElementById("btnRestart");
    btnRestart.onclick = function() {
        modal.style.display = "none";
        reiniciarJuego();
    };
}

// Función que oculta todas las extremidades del Papá Noel
function ocultarTodo() {
  let classExtremidades = document.getElementsByClassName("extremidad");
  for (extremidad of classExtremidades) {
      extremidad.classList.add("ocultar");
  }
}

// Función para esconder las letras de la pantalla
function esconderLetras() {
  for (letra of letrasContainer) {
      letra.classList.add("ocultarLetra");
  }
}

// Reinicia el juego - Restablece variables a 0, llama a funciones para ocultar al ahorcado, elegir una película aleatoria, cargarla, esconder la letra y reiniciar la puntuación
function reiniciarJuego() {
    puntuacion = 0;
    partesMostradas = 0;
    letrasUtilizadas = [];

    ocultarTodo();
    elegirPeliculaAleatoria();
    cargarPelicula();
    esconderLetras();

    document.getElementById("numeroScore").innerText = "00000";
    let mensajeAnterior = document.querySelector("body > div");
    if (mensajeAnterior) {
        mensajeAnterior.remove();
    }

    document.addEventListener('keydown', clickar);
    document.getElementById("teclado").style.pointerEvents = "auto";
    let contenedorLetraUnitaria = document.getElementById("contenedorLetraUnitaria");
    while (contenedorLetraUnitaria.firstChild) {
        contenedorLetraUnitaria.removeChild(contenedorLetraUnitaria.firstChild);
    }
}

// Desactiva el event listener para introducir inputs por teclado y botones
function desactivarJuego() {
  document.removeEventListener('keydown', clickar);
  document.getElementById("teclado").style.pointerEvents = "none";
}