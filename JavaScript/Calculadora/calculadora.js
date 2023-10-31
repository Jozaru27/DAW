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
            resolverExpresion();
            break;
        case "()":
            break;
        case ".":
            // solo añadir si hay número delante
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
    if (pantalla.value == "0") pantalla.value = valor;
    else pantalla.value += valor;
}

/* Laquo - Borrar */
function borrar() {
    let pantalla = document.querySelector('input');
    let valorPantalla = pantalla.value;

    pantalla.value = valorPantalla.substring(0, valorPantalla.length - 1);

    if (pantalla.value === "") {
        pantalla.value = "0"; // Si no queda nada, mostrar 0
    }
}

/* Función para agregar números si es posible */
function agregarSiDisponible(valor) {
    let pantalla = document.querySelector('input');
    let valorPantalla = pantalla.value;
    let ultimoCaracter = valorPantalla.charAt(valorPantalla.length - 1);

     // Reemplaza "x" por "*" si se detecta
    if (valor === "x") {
        valor = "*";
    }

    if (!/[X+\/%-,.]/.test(ultimoCaracter)) {
        agregarNumero(valor);
    }
}

/* Función para resolver la expresión y mostrar el resultado en pantalla */
function resolverExpresion() {
    let pantalla = document.querySelector('input');
    let valorPantalla = pantalla.value;

    try {
        let resultado = eval(valorPantalla);
        pantalla.value = resultado.toString(); // Muestra el resultado como un número
    } catch (error) {
        pantalla.value = "Error"; // Manejar errores en la evaluación
    }
}