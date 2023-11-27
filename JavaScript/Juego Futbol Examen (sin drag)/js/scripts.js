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
    ocultarMensaje();
    cargarEquipos();
    // mostrarMensaje(false, "mensaje", true, "textoBoton", true);

    selectorJugadores.addEventListener("change", cargarJugadores);

}

//Devuelve un número aleatorio entero entre el mínimo y el máximo indicado, ambos inclusive
function aleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

// Función para ocultar el bloqueo/mensaje inicial
function ocultarMensaje() {
    mensaje.classList.add("oculto");
    bloquear.classList.add("oculto");
}

// function mostrarMensaje(ocultar, mensaje, error, textoBoton, funcionBoton){

//     if (ocultar){
//         mensaje.classList.add("oculto");
//         bloquear.classList.add("oculto");
//     } else {
//         mensaje.classList.remove("oculto");
//         bloquear.classList.remove("oculto");
//     }
    
//     mensaje.innerText = mensaje;

//     if (error){
//         mensaje.classList.add("error");
//     } else {
//         mensaje.classList.remove("error");
//     }

//     let boton = document.createElement("button");
//     boton.innerText = textoBoton;
//     mensaje.appendChild(boton);

//     if (funcionBoton) {
//         boton.addEventListener("click", function(){
//             mensaje.classList.add("oculto");
//             bloquear.classList.add("oculto");
//             this.remove();
//         });

//     } else {
//         boton.addEventListener("click", location.reload());
//     }
// }

// function funcionBoton(){

// }

// Función para cargar los equipos en el select con sus valores
function cargarEquipos() {
    gruposJugadores.forEach(element => {
        var option = document.createElement("option");
        option.innerText = element[0];
        option.value = element[1];
        selectorJugadores.appendChild(option);
    });
}

function cargarJugadores() {
    console.log(this.value);
    jugadores.innerHTML = '';
    if (this.value) {
        for (let i = 1; i <= numeroJugadores; i++) {
            let img = document.createElement("img");
            img.src = "img/" + this.value + "/" + i + ".jpg";
            img.classList.add("jugador");
            img.addEventListener("dblclick", agregarAlEquipoSeleccionadoEnElCampoEquipo1OEquipo2OUnoMasMaximoOnceJugadoresNiUnoMasNiUnoMenosSiNoSaltaraErrorYSinLosOnceNoSePuedeJugar);
            jugadores.appendChild(img);
        }
    }
}

function agregarAlEquipoSeleccionadoEnElCampoEquipo1OEquipo2OUnoMasMaximoOnceJugadoresNiUnoMasNiUnoMenosSiNoSaltaraErrorYSinLosOnceNoSePuedeJugar() {
    let equipo = document.getElementById(selectorEquipo.value);
    let campo = equipo.getElementsByClassName("campo")[0];
    if (equipo.getElementsByClassName("cantidadJugadores")[0].innerText > maxJugadoresEquipo) {
        document.getElementById(selectorEquipo.value).appendChild(this);
        this.removeEventListener("dblclick", agregarAlEquipoSeleccionadoEnElCampoEquipo1OEquipo2OUnoMasMaximoOnceJugadoresNiUnoMasNiUnoMenosSiNoSaltaraErrorYSinLosOnceNoSePuedeJugar)
    } else {
        campo.appendChild(this);
    }
}