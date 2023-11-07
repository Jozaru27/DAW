/* Declaración Variables Generales */
let numeros = "0123456789";
let operadores = "+/-%x*";
let puntito = ".";
let parentesis = "()";
let punto = false;

/* Cargar un Add Event Listener */
window.onload = function() {
    addEvents();
}

/* EventListener - Cuando se hace click en un cualquier boton, se ejecuta la función acción*/
function addEvents() {
    let botones = document.querySelectorAll(".boton");
    document.addEventListener("keydown", accion);

    for(boton of botones) {
        boton.addEventListener("click", accion);
        boton.addEventListener("mousedown", sombra);
        boton.addEventListener("mouseup", sombra);
        boton.addEventListener("mouseout", sombra);
    }
}

/* Función Acción - La acción que realiza cada botón cuando se pulsa */
function accion(e) {
    
    let element = ""
    if (e.type == "keydown") element = e.key
    else element = this.innerText

    switch(element) {
        case "C":
            pantalla.value = "0";
            punto = false;
            break;
        case "x":
        case "+":
        case "-":
        case "/":
        case "*":
        case "%":
            agregarOperacion(element);
            break;
        case "«":
        case "Backspace":
            borrar();
            break;
        case "=":
        case "Enter":
            resultado();
            break;
        case "()":
            agregarParentesis();
            break;
        case ".":
            agregarPunto(element);
            break;
        default: 
            escribirPantalla(element);
    }
}

/* Función Toggle - Sombra interna botón */
function sombra(ev) {
    ev.type == "mouseout" ? this.classList.remove("sombra") : this.classList.toggle("sombra");
}

/* Escribir En pantalla */
function escribirPantalla(dato) {
    if (numeros.includes(dato) || operadores.includes(dato) || puntito.includes(dato) || parentesis.includes(dato))
    
    if (numeros.includes(dato) && pantalla.value == "0") {
        pantalla.value = dato;
    } else {
        pantalla.value += dato;
    }

}

/* Agregar punto */
function agregarPunto(dato){
    let ultimoCaracter = pantalla.value.charAt(pantalla.value.length - 1);

    if (!punto && numeros.includes(ultimoCaracter)) {
        pantalla.value += dato;
        punto = true;
    }
}

/* Laquo - Borrar */
function borrar() {
    pantalla.value = pantalla.value.substring(0, pantalla.value.length - 1);
    let ultimoCaracter = pantalla.value.charAt(pantalla.value.length - 1);
    
    if (ultimoCaracter === ".") {
        punto = false;
    }

    if (pantalla.value === "") {
        pantalla.value = "0"; // Si no queda nada, mostrar 0
    }

    if (ultimoCaracter === ")") {
        pantalla.value = pantalla.value.slice(1);
    }

}

/* Función para agregar operador si es posible */
function agregarOperacion(valor) {
    let ultimoCaracter = pantalla.value.charAt(pantalla.value.length - 1);
    console.log(valor);
    if (valor == "*") {
        console.log("ASDF");
        valor = "x";
    }
    if (ultimoCaracter !== 'x' && ultimoCaracter !== '+' && ultimoCaracter !== '/' && ultimoCaracter !== '-' && ultimoCaracter !== '%' && ultimoCaracter !== '.'){
        punto = false;
        escribirPantalla(valor);
    }
}

/* Función para resolver la expresión y mostrar el resultado en pantalla */
function resultado(){
    pantalla.value = pantalla.value.replaceAll("x", '*'); // Reemplaza las x por * para que el eval funcione mientras se muestra x por pantalla
    pantalla.value = pantalla.value.replaceAll("%", '*(1/100)*'); // Porcentaje
    pantalla.value = eval(pantalla.value); // Efectúa operación
}

/* Función para añadir paréntesis rodeando todo */
function agregarParentesis() {
    let contenidoPantalla = pantalla.value;
    pantalla.value = `(${pantalla.value})`;
}

// numpad no multiplicacion
// borrar un paréntesis borrar el primero - substring 1 a length