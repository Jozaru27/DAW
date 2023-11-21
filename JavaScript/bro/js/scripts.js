let gruposJugadores = [["Futbolistas", "futbol"],
["Intérpretes", "interpretes"],
["DC", "dc"],
["Star Wars", "starwars"],
["Marvel", "marvel"]];

//Número de jugadores en cada grupo
let numeroJugadores = 13;

//Número máximo de jugadores por equipo
let maxJugadoresEquipo = 11;

window.onload = function () {
    ocultarBloqueo();
    mostrarEquipos();

    let seleccion = document.getElementById("selectorJugadores");
    seleccion.addEventListener("change", cargarFotosEquipo);
    

    // no se hace con el botón sino con addevent on doubleclick
    // let añadir = document.getElementById("add");
    // añadir.addEventListener("click", añadirJugador);

    let jugarBoton = document.getElementById("jugar");
    jugarBoton.addEventListener("click", tamañoEquipo, jugarPartido);

    seleccionarEquipo = document.getElementById("selectorEquipo");
    seleccionarJugadores = document.getElementById("selectorJugadores");

    // seleccionarEquipo = addEventListener("click", seleccionarEquipo);
    // seleccionarJugadores = addEventListener("click", seleccionarJugadores);
}

//Devuelve un número aleatorio entero entre el mínimo y el máximo indicado, ambos inclusive
function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

//Función para ocultar la pantalla bloqueada inicial y la ventana de mensaje vacía
function ocultarBloqueo() {
    let mensaje = document.getElementById("mensaje");
    let bloquear = document.getElementById("bloquear");
    bloquear.classList.add("oculto");
    mensaje.classList.add("oculto");
}

function seleccionarEquipo(){
    let seleccionarEquipo = document.getElementById("selectorEquipo");
}

//Carga las distintas opciones de equipos de jugadores a elegir en el primer select
function mostrarEquipos(){
    let seleccionarJugadores = document.getElementById("selectorJugadores");
    var option1 = document.createElement("option");
    var option2 = document.createElement("option");
    var option3 = document.createElement("option");
    var option4 = document.createElement("option");
    var option5 = document.createElement("option");
    option1.innerText = "DC";
    option2.innerText = "Intérpretes";
    option3.innerText = "Futbol";
    option4.innerText = "Marvel";
    option5.innerText = "Star Wars";
    seleccionarJugadores.add(option1);
    seleccionarJugadores.add(option2);
    seleccionarJugadores.add(option3);
    seleccionarJugadores.add(option4);
    seleccionarJugadores.add(option5);
}

function seleccionarJugadores(){
    
}
// Función la cual, dependiendo de la opción de equipo seleccionado, mostrará las imágenes
function cargarFotosEquipo() {
    let seleccionarJugadores = document.getElementById("selectorJugadores");
    let jugadoresContainer = document.getElementById("jugadores");
    let equipoSeleccionado = seleccionarJugadores.value;

    let ruta = "../img/" + equipoSeleccionado + "/";
    
    for (let index = 0; index < 13; index++) {
        let jugador = document.createElement("img");
        jugador.src = ruta + index + ".jpg"; 
        jugador.classList.add("jugador");
        jugadoresContainer.appendChild(jugador);
    }
}

//Funcion para controlar los límites de máximos o mínimos. Esta se llamaría al darle al botón Jugar
function tamañoEquipo(){
    let tamaño = 0;
    if (tamaño > maxJugadoresEquipo){
        
        // faltaria poder quitar el mensaje
        let mensaje = document.getElementById("mensaje");
        let bloquear = document.getElementById("bloquear");
        bloquear.classList.remove("oculto");
        mensaje.classList.remove("oculto");
        mensaje.classList.add("error");
        let node = document.createTextNode ('No se puede añadir más de 11 jugadores');
        mensaje.appendChild(node);

        // setTimeout(function() {
        //     mensaje.addCLass('oculto');
        // }, 4000);
    } else if (tamaño < maxJugadoresEquipo){
        let mensaje = document.getElementById("mensaje");
        let bloquear = document.getElementById("bloquear");
        bloquear.classList.remove("oculto");
        mensaje.classList.remove("oculto");
        mensaje.classList.add("error");
        let node = document.createTextNode ('No se puede tener menos de 11 jugadores');
        mensaje.appendChild(node);
    }
}

//Funcion donde se juega el partido
function jugarPartido(){
    // verifica que los equipos están llenos
    // mostrar ventana con resultados
    let mensaje = document.getElementById("mensaje");
        let bloquear = document.getElementById("bloquear");
        bloquear.classList.remove("oculto");
        mensaje.classList.remove("oculto");
        let node = document.createTextNode ('El resultado es ...');
        // falta lógica random
        mensaje.appendChild(node);

    // cuando se acabe, recargar la página
    window.location.reload();
}

function añadirJugador(){
    // toma el jugador sobre el cual se hace doble click
    // toma el equipo seleccionado y añade el jugaro
}