let datos;

// Al cargar la ventana, cargamos la función cargar Datos
window.onload = () => {
    cargarDatos();
};

// Función que hace un fetch sacando información de las 52 provincias. Además, llama a cargar Provincias
function cargarDatos() {
    let URLDatos = "https://public.opendatasoft.com/api/explore/v2.1/catalog/datasets/provincias-espanolas/records?limit=52";

    fetch(URLDatos)
        .then((datos) => datos.json())
        .then((dato) => {
            console.log(dato);
            datos = dato.results;
            cargarProvincias();
        });
}

// Función la cuál selecciona todos los elementos con la clase .comunidad y lo guarda en la variable lista
// Luego, con un for recorre cada uno de los elementos, y a los anchor les mete un eventListener para cuando se haga click que llame a cargar Evento
function cargarProvincias() {
    let lista = document.querySelectorAll(".comunidad"); 

    for (let comunidad of lista) {
        if (comunidad.querySelector("a")) {
            comunidad.querySelector("a").href = "#";
            comunidad.querySelector("a").addEventListener("click", cargarEvento);
        }
    }
}

// Función con la cuál cargamos información de la Provincia a la que le hemos hecho click
function cargarEvento() {
    informacion.innerHTML = "";

    let comunidad = decodeURI(this.parentNode.dataset.id);
    let table = document.createElement("table");
    let tableRow = document.createElement("tr")

    informacion.appendChild(table);
    tableRow.innerText = comunidad;

    for (let provincias of datos) {
        console.log(provincias.ccaa);
        if (provincias.ccaa == comunidad) {
            console.log("ENTRA");
            let col = document.createElement("td");

            col.appendChild(document.createTextNode(provincias.provincia));
            table.appendChild(col);
        }
    }
}
