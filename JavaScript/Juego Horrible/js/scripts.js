// Variables
let puntos;
let totalPersonajes;

// Al cargar la página
window.onload = () => {
    lanzar = document.getElementById("lanzar");
    lanzar.addEventListener("click", lanzarDado)
}

// Lanza un dado entre 1-6
function lanzarDado (){
    puntos = Math.floor(Math.random() * 6) + 1;

    cargarDado();

    if (puntos % 2 !== 0) {
        cargarListaPersonajes();
    } else {
        cargarListaChistes();
    }
}

// Cargar la imagen del dado en la etiqueta <div id="dado">
function cargarDado() {
    const dadoDiv = document.getElementById("dado");
    dadoDiv.innerHTML = ""; // Limpiar contenido anterior

    const imagenDado = document.createElement("img");
    imagenDado.src = `img/${puntos}.png`; // Suponiendo que las imágenes están en la ruta /img/(número del 1 al 6).png
    imagenDado.alt = `Dado: ${puntos}`;
    
    // Agregar la imagen del dado al div
    dadoDiv.appendChild(imagenDado);
}

// Cargar la lista de personajes de la API - Obtener su total
async function cargarListaPersonajes (){
    let url = "https://rickandmortyapi.com/api/character";

    await fetch(url)
        .then(response => response.json())
        .then(data =>{
        totalPersonajes = data.info.count;
    })

    obtenerPersonajeAleatorio();
}

// Obtiene personaje aleatorio
function obtenerPersonajeAleatorio(){
    let numeroAleatorio = Math.floor(Math.random() * totalPersonajes) + 1;
    let urlPersonaje = `https://rickandmortyapi.com/api/character/${numeroAleatorio}`;

    fetch(urlPersonaje)
        .then(response => response.json())
        .then(personaje => {
            console.info("Personaje aleatorio obtenido:", personaje);
            mostrarInformacion(personaje);
        })
}

// Muestra la información del personaje en el HTML
function mostrarInformacion(personaje) {
    const mainDiv = document.getElementById("main");
    mainDiv.innerHTML = ""; // Limpiar contenido anterior

    // Crear elementos HTML para mostrar la información del personaje
    const imagenElement = document.createElement("img");
    imagenElement.src = personaje.image;

    const nombreElement = document.createElement("h2");
    nombreElement.textContent = `${personaje.name}`;

    const generoElement = document.createElement("h3");
    generoElement.textContent = "Género";

    const generoValorElement = document.createElement("p");
    generoValorElement.textContent = personaje.gender;

    const especieElement = document.createElement("h3");
    especieElement.textContent = "Especie";

    const especieValorElement = document.createElement("p");
    especieValorElement.textContent = personaje.species;

    const tipoElement = document.createElement("h3");
    tipoElement.textContent = "Tipo";

    const tipoValorElement = document.createElement("p");
    tipoValorElement.textContent = personaje.type || "Desconocido";

    // Agregar los elementos al div principal
    mainDiv.appendChild(imagenElement);
    mainDiv.appendChild(nombreElement);
    mainDiv.appendChild(generoElement);
    mainDiv.appendChild(generoValorElement);
    mainDiv.appendChild(especieElement);
    mainDiv.appendChild(especieValorElement);
    mainDiv.appendChild(tipoElement);
    mainDiv.appendChild(tipoValorElement);
}
