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
    dado.innerHTML = ""; // Limpiar contenido anterior

    let imagenDado = document.createElement("img");
    imagenDado.src = `img/${puntos}.png`; // Suponiendo que las imágenes están en la ruta /img/(número del 1 al 6).png
    imagenDado.alt = `Dado: ${puntos}`;

    imagenDado.width = 100;
    imagenDado.height = 100;
    
    // Agregar la imagen del dado al div
    dado.appendChild(imagenDado);
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
    main.innerHTML = ""; // Limpiar contenido anterior

    let imagenElement = document.createElement("img");
    imagenElement.src = personaje.image;

    let nombreElement = document.createElement("h2");
    nombreElement.textContent = personaje.name;

    let generoElement = document.createElement("h3");
    generoElement.textContent = "Género";

    let generoValorElement = document.createElement("p");
    generoValorElement.textContent = personaje.gender;

    let especieElement = document.createElement("h3");
    especieElement.textContent = "Especie";

    let especieValorElement = document.createElement("p");
    especieValorElement.textContent = personaje.species;

    let tipoElement = document.createElement("h3");
    tipoElement.textContent = "Tipo";

    let tipoValorElement = document.createElement("p");
    tipoValorElement.textContent = personaje.type || "Desconocido";

    // Agregar los elementos al div principal
    main.appendChild(imagenElement);
    main.appendChild(nombreElement);
    main.appendChild(generoElement);
    main.appendChild(generoValorElement);
    main.appendChild(especieElement);
    main.appendChild(especieValorElement);
    main.appendChild(tipoElement);
    main.appendChild(tipoValorElement);

}