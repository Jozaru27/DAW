/* Cargar un Add Event Listener */
window.onload = function() {
    addEvents();
}

/* EventListener - Cuando se hace click en un cualquier boton, se ejecuta la función acción*/
function addEvents() {
    let botones = document.querySelectorAll(".boton");

    for(boton of botones) {
        boton.addEventListener("click", accion);
        boton.addEventListener("mousedown", sombra);
        boton.addEventListener("mouseup", sombra);
        boton.addEventListener("mouseout", sombra);
    }
}

/* Función Acción - La acción que realiza cada botón cuando se pulsa */
function accion() {
    console.log(this.innerText);
    switch(this.innerText) {
        case "C":
            pantalla.value = "0";
            break;
        case "x":
        case "+":
        case "-":
        case "/":
        case "%":
            agregarSiDisponible(this.innerText);
            break;
        case "«":
            borrar();
            break;
        case "=":
            resultado();
            break;
        case "()":
            agregarParentesis();
            break;
        case ".":
            agregarNumero(this.innerText);
            break;
        default: 
            agregarNumero(this.innerText);
    }
}

/* Función Toggle - Sombra interna botón */
function sombra(ev) {
    ev.type == "mouseout" ? this.classList.remove("sombra") : this.classList.toggle("sombra");
}

/* Añadir números al input */
function agregarNumero(valor) {
    let ultimoCaracter = pantalla.value.charAt(pantalla.value.length - 1);
    if (valor === "." && ultimoCaracter === ".") {
        return; // Evitar agregar dos puntos seguidos
    }

    if (pantalla.value === "0" && valor !== ".") {
        pantalla.value = valor;
    } else {
        pantalla.value += valor;
    }
}

/* Laquo - Borrar */
function borrar() {
    pantalla.value = pantalla.value.substring(0, pantalla.value.length - 1);

    if (pantalla.value === "") {
        pantalla.value = "0"; // Si no queda nada, mostrar 0
    }
}

/* Función para agregar operador si es posible */
function agregarSiDisponible(valor) {
    let ultimoCaracter = pantalla.value.charAt(pantalla.value.length - 1);

    if (ultimoCaracter !== 'x' && ultimoCaracter !== '+' && ultimoCaracter !== '/' && ultimoCaracter !== '-' && ultimoCaracter !== '%'){
        agregarNumero(valor);
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

// no se puede añadir operador si hay una .
// no se puede añadir . si hay un paréntesis
// como se puede añadir coma en un operando que ya tenga coma