// VARIABLE - Ya que se usan entre funciones, tienen que estar públicas
let estado; // Almacena el código del estado (formato: XX)
let estadoRecogido; // Almacena los datos del estado
let datosHispanos; // Almacena información sobre la población Hispana
let datosEstado; // Almacena información "actual" de COVID del estado

// WINDOW ONLOAD - Recoge todos los elementos area del html y les añade un event listener, para que cuando clickemos en ellos, se ponga en marcha todo
window.onload = async () => {
    let areasSeleccionadas = document.querySelectorAll("area");

    areasSeleccionadas.forEach((area) => {
        area.addEventListener("click", cargarDatosAPI);
    });    
};

// FUNCIÓN - Recoge los datos de la API, haciendo tres llamadas diferentes, dos a una API y una a otra API
async function cargarDatosAPI(){
    estadoMayus = this.dataset.cod;  // Con dataset.cod, recogemos el código del estado, por ejemplo: Alabama: AL
    estado = estadoMayus.toLowerCase(); // Lo pasamos a minúsculas, ya que la API sólo funciona de tal manera
    console.log(estado);

    let url = `https://api.covidtracking.com/v1/states/${estado}/info.json`; // El fetch se hace indicando las dos letras correspondientes a cada estado en minúsculas
    
    await fetch(url)
    .then((respuesta) => respuesta.json())
    .then((data) => {
      estadoRecogido = data;   // Almacenamos los datos del estado al que hemos clickado
      console.log(estadoRecogido);
      fipsEstado = data.fips; // Almacenamos el número del estado (los fips)
      console.log(fipsEstado);
    });


    let url2 = `https://api.census.gov/data/2019/pep/charagegroups?get=POP&HISP=&for=state:${fipsEstado}`; // Fetch al cual le pasamos el número fips del Estado, con tal de obtener información sobre estadísticas Hispanas

    await fetch(url2)
    .then((respuesta) => respuesta.json())
    .then((data) => {
      datosHispanos = data;     // Obtenemos información sobre el estado, su población total, y cuántos de ellos son Hispanos o no
      console.log(datosHispanos)
    });


    let url3 = `https://api.covidtracking.com/v1/states/${estado}/current.json`;
  
    await fetch(url3)
      .then((respuesta) => respuesta.json())
      .then((data) => {
        datosEstado = data;     // Obtenemos información sobre el COVID "actual", en ese estado en concreto.
        console.log(datosEstado);
        cargarModalInfo();
      });
}

// FUNCIÓN - Calcula el porcentaje de Hispanos / No Hispanos sobre la población total
function calculoPorcentaje(num1, num2) {
    return ((num2 / num1) * 100).toFixed(2); // Devuelve el cálculo del segundo número (hispanos/no hispanos) dividido por el primer número (población), multiplicado entre 100 y con máximo de decimales a 2
}

// FUNCIÓN - Carga los datos en el modal
function cargarModalInfo(){
    fondo.classList.remove("oculto"); // Eliminamos la clase de oculto del fondo para mostrarlo (le quita el display:none del CSS);
    modal.classList.remove("oculto"); // Eliminamos la clase de oculto del modal para mostrarlo (le quita el display:none del CSS);

    // fondo.addEventListener("click", fondo.classList.add("oculto")); Esto las añade inmediatamente sin esperar al click, mala forma de declarar un eventListener
    // fondo.addEventListener("click", modal.classList.add("oculto"));

    fondo.addEventListener("click", () => { // Cuando se clique al fondo (fuera del modal), tanto el modal como el fondo desaparecerán (se les vuelve a añadir la clase "oculto")
        modal.classList.add("oculto");
        fondo.classList.add("oculto");
    });

    titulo.innerText = estadoRecogido.name; // Cambia "Titulo" por el nombre de estado correspondiente
    notas.innerText = estadoRecogido.notes; // Cambia el contenido de Notas por el correspondiente 

    let poblacion = modal.querySelectorAll(".poblacion"); // Selecciona todos los elementos con clase "poblacion" dentro del elemento modal
    poblacion.forEach((elemento, indice) => { // Por cada uno de los elementos...
        let dato = datosHispanos[indice + 1][0]; // Calcula y guarda el valor del dato cogiendo el elemento correspondiente de datosHispanos
        elemento.innerText = `${dato}\n [${calculoPorcentaje(datosHispanos[1][0], dato)}%]`;    // Actualiza el elemento añadiendo el valor y el porcentaje calculado
    });

    let descripcion = document.querySelectorAll(".descripcion"); // Selecciona todos los elementos con clase "descripcion" dentro del elemento modal

    let fechaNumLargo = datosEstado.date; // Recoge la fecha en su formato de número largo
    let fechaString = fechaNumLargo.toString(); // Convierte el número largo en un string para poder separarlo

    let AA = fechaString.slice(0, 4); // Guarda en una variable los cuatro primeros números, que corresponden al año
    let MM = fechaString.slice(4, 6); // Guarda en una variable los dos siguientes números, que corresponden al mes
    let DD = fechaString.slice(6, 8); // Guarda en una variable los dos siguientes números, que corresponden al día

    let fechaFinal = `${DD}/${MM}/${AA}`; // Guardamos la fecha con el formato Final que queremos, en mi caso DD/MM/AA

    // Guardamos los elementos a recorrer (indicados en el PDF)
    let elementosDescripcion = ['date', 'death', 'deathIncrease', 'hospitalizedCurrently', 'hospitalizedIncrease', 'totalTestResults', 'totalTestResultsIncrease', 'positive', 'positiveIncrease', 'negative', 'negativeIncrease'];

    elementosDescripcion.forEach((elemento, i) => { // Por cada elemento de la lista...
        switch (i) {
            case 0:
                descripcion[i].innerText = fechaFinal;   // Mostrar la fecha en el primer elemento, tomando el valor de la variable fechaFinal
                break;
            default:
                let dato = datosEstado[elemento] ?? 0; //Si el valor se va a quedar vacío (o sea, null) lo cambia por un 0
                descripcion[i].innerText = `${dato}\n [${calculoPorcentaje(datosHispanos[1][0], dato)}%]`; // Actualiza el elemeneto añadiendo el valor y el porcentaje calculado
                break;
        }
    });
}