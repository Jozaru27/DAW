/* Cargar un Add Event Listener */


let operadores = "+/x-%";

if(operadores.contains("x")) 



window.onload = function() {
    addEvents();
}


function addEvents() {
    let botones = document.querySelectorAll(".boton");

    for(boton of botones) {
        boton.addEventListener("click", accion);
        boton.addEventListener("moused", accion);
        boton.addEventListener("click", accion);
        boton.addEventListener("click", accion);
    }
}

function accion() {
    console.log(this.innerText);
    switch(this.innerText) {
        case "C":
            pantalla.value = "0";
            break;
        case "X"&&"+":
            if(comprobarDasduplicidad(asdf)) asdfasdf;
        case "+":
        case "x":

            laksdfldkjasf
        default: 
            agregarNumero(this.innerText);
    }
}



function comprobarDuplicidad() {

}



/* Función que togglea si un botón tiene sombra interna o no */
function sombra(elemento, activar) {
    if(activar) elemento.classList.add("sombra");
    else elemento.classList.remove("sombra");
}

/* Añadir números al input */
function agregarNumero(valor) {
    console.log(valor);
    //const pantalla = document.querySelector('input');
    //const numero = boton.id;
    pantalla.value += valor;
}

/*botones con onclick y event listener: operandos y operadores - operador que coge la cadena de texto y la calcula*/