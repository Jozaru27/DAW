//SELECT con los usuarios
let usuariosSel;
//JSON con todos los usuarios
let usuarios;

//Div donde cargaremos los datos del usuario seleccionado
let datosUsuarios;

//Div donde tenemos los botones. Permanecerá oculto mientras no haya seleccionado un usuario
let botonera;

//Div donde mostraremos los posts
let zonaPosts;

//Div donde mostraremos las fotos;
let zonaAlbums;

//Div donde mostraremos las fotos;
let zonaFotos;

//Boton Posts
let mostrarPosts;

//Boton Fotos
let mostrarFotos;

let idUser = 0;

var parametros = {tipo:"", clase:"", id:"", texto:"", src:"", href:"", value:""};

var arrayPueblos = ["Turís", "Cheste", "Chiva", "Montserrat", "Godelleta", "Valencia", "Torrent", "Paterna", "Gandía", "Xàtiva", "Elx", "Paiporta", "Picanya"]; // Array de localidades para usar cuando la API no funciona

window.onload = async function() {
    //Seleccionamos el SELECT
    usuariosSel = document.querySelector("#usuarios");
    //Añadimos change al SELECT
    usuariosSel.addEventListener("change", mostrarDatosUsuario);
    //Seleccionamos el div donde cargaremos los datos de los usuarios.
    datosUsuarios = document.querySelector("#info");

    zonaPosts = document.getElementById("posts");
    zonaFotos = document.getElementById("fotos");
    zonaAlbums = document.getElementById("albums");

    mostrarPosts = document.getElementById("mostrarPosts");
    mostrarFotos = document.getElementById("mostrarFotos");

    mostrarPosts.addEventListener("click", showPosts);
    mostrarFotos.addEventListener("click", showAlbums);

    botonera = document.querySelector("#botonera");

    await cargarUsuarios(); // Tuve que quitar "usuarios = " porque daba error de asincronía

    cargarSelectUsuarios();
}

// Obtenemos el JSON de la dirección indicada // COMPLETADO
async function cargarUsuarios() {
    let url = "https://jsonplaceholder.typicode.com/users"; // Cargamos la url en una variable para poder hacer un fetch a la API

    await fetch(url)
    .then(response => response.json())
    .then(data =>{
        console.log(data); // Muestra la información del JSON por consola
        usuarios = data; // Guardamos toda la información del JSON en una variable

    })
    console.log(usuarios); // Muestra la información de la variable (el JSON) por consola (para confirmar que se guardan bien los datos)
    cargarSelectUsuarios(); // Llama a la función cargarSelectUsuarios para que tan pronto como la API haya recogido los datos, estos se carguen en el select
}

// Función que devuelve el sexo del usuario // COMPLETADO
async function estimarGenero(nombre) {
    let nameVar = nombre.split(" "); // Según la API, es mejor que sólo entre un nombre como parámetro o puede dar error (en mi caso, devolver siempre género femenino)
    let url = `https://api.genderize.io?name=${nameVar[0]}`; // Cogemos el primero de los segmentos tras la separación
    let genero; // Crea una variable donde va a almacenar el género
    console.log(nameVar[0]); // Muestra el nombre que obtiene por consola

    await fetch(url)
    .then(response => response.json())
    .then(data =>{
        genero = (data.gender == "male") ? "./img/male.png" : "./img/female.png"; // Ternaria, de la cual dependiendo el valor recogido asigna una imagen u otra
    });
    console.log(genero); // Muestra qué ruta toma para el género por consola
    return genero; // Devuelve el Género
}

//Función que devuelve la edad del usuario // COMPLETADO
async function calcularEdad(nombre) {
    let nameVar = nombre.split(" "); // Según la API, es mejor que sólo entre un nombre como parámetro o puede dar error
    let url = `https://api.agify.io/?name=${nameVar[0]}`;
    let edad; // Variable donde va a almacenar la edad
    console.log(nameVar[0]); // Muestra la edad que obtiene por consola

    await fetch(url)
    .then(response=>response.json())
    .then(data=>{
        edad = data.age;
    });
    console.log(edad); // Muestra qué edad tiene por consola
    return edad; // Devuelve la edad
}

//Cargamos el JSON de usuarios en el select // COMPLETADO
//<option value=[id del usuario]>[nombre del usuario]</option>
function cargarSelectUsuarios() {
    reiniciarParametros();

    let selectUsuarios = document.getElementById("usuarios"); // Guardamos el elemento select en una variable

    usuarios.forEach(usuario => { // Por cada elemento del JSON almacenado en usuarios...
        let option = document.createElement("option");  // Crea un elemento html de opción
        
        option.value = usuario.id; // Establece el valor de la opción
        option.text = usuario.name; // Establece el texto de la opción

        selectUsuarios.appendChild(option); // Cuelga la opción del elemento select
    });
}

//Función genérica para la creación de elementos // Creados más abajo, uno para imagenes y otro para elementos en general
function crearElemento(atributos) {
    //A COMPLETAR SI SE QUIERE
}

//Buscamos la ciudad sugerida. // COMPLETADO
async function cargarCiudad(lat, lng) {
    let url = `https://geocode.xyz/${lat},${lng}?json=1`;
    let ciudad; // Variable donde va a almacenar la ciudad
    console.log(lat); // Muestra la latitud por consola
    console.log(lng); // Muestra la longitud por consola

    await fetch(url)
    .then(response=>response.json())
    .then(data=>{
        console.log(data)
        ciudad = (data.suggestion.north.city.length > 2) ? data.suggestion.north.city : data.suggestion.south.city; // Ternaria, de la cual dependiendo de donde se situa en cuanto a la longitud indica si es del norte o sur
    });
    console.log(ciudad); // Muestra qué ciudad tiene por consola
    return ciudad; // Devuelve la ciudad
}

//Filtrado de info utilizando array.filter u otro sistema // COMPLETADO - Indicado como hacerlo con API's, funciones o de manera estática
async function mostrarDatosUsuario() {
    zonaPosts.innerHTML = "";
    zonaAlbums.innerHTML = "";
    zonaFotos.innerHTML = "";
    info.innerText=""; // Borra el contenido para que no se almacene el contenido mostrado

    idUser = this.value -1; // Almacenamos el valor de 'este' (this) elemento con el que llamamos la función (le restamos 1 por el valor de índice, si no sale el siguiente)
    console.log(idUser); // Muestra que al clickar a cada usuario tiene su valor predeterminado por consola

    // let info = document.getElementById("info"); // No es necesario llamara al elemento y almacenarlo en una variable
    let genero = await estimarGenero(usuarios[idUser].name); // Obtiene el género del objeto para saber qué imagen añadir en el div (le indicamos cuál debe tomar según el id)          --- !! Si se llega al límite de la API, salen siempre mujeres (feminismo)
    // let edad = await calcularEdad(usuarios[idUser].name); // Obtiene la edad, según la API                                                                                           --- !! Comentado por el mismo motivo que el de abajo, la API va cuando quiere
    // let ciudad = await cargarCiudad(usuarios[idUser].address.geo.lat, usuarios[idUser].address.geo.lng) // Obtiene la ciudad, según la latitud y longitud del JSON enviadas a la API --- !! Esta es la puñetera razón por la que te envié tres correos, lo comento, pero de normal se desocmentaría esta línea y la de más abajo que muestra esta misma variable para obtener los datos de la API

    // info.appendChild(añadirImagen(null, "foto", await estimarGenero(this.name))); 
    info.appendChild(añadirTexto("div", "foto", null, null, null)).appendChild(añadirImagen(null, null, genero)); // Se añade un div.foto al div.info, al cual se le añade una imagen, la cuál toma la ruta

    info.appendChild(añadirTexto("div", null, "titulo", null, "Nombre"));   // Añade el campo de título
    info.appendChild(añadirTexto("div", null, "descripción", null, usuarios[idUser].name)); // Añade el nombre correspondiente

    info.appendChild(añadirTexto("div", null, "titulo", null, "Edad"));   // Añade el campo de edad
    // info.appendChild(añadirTexto("div", null, "descripción", null, edad)); // Añade la edad correspondiente                                                                           --- !! Comentado por problemas con la API, al igual que la de ciudad
    info.appendChild(añadirTexto("div", null, "descripción", null, seleccionarEdad())); // Añade la edad usando una función que toma un número aleatorio
    // info.appendChild(añadirTexto("div", null, "descripción", null, "30")); // Así podríamos tener una edad estática para que no cambie

    info.appendChild(añadirTexto("div", null, "titulo", null, "Email"));  // Añade el campo de email
    info.appendChild(añadirTexto("a", null, "descripción", "mailto:" + usuarios[idUser].email, usuarios[idUser].email)); // Añade la ciudad correspondiente - Además funciona como mail (enlace)

    info.appendChild(añadirTexto("div", null, "titulo", null, "Ciudad")); // Añade el campo de ciudad
    //info.appendChild(añadirTexto("div", null, "descripción", null, ciudad)); // Añade la ciudad correspondiente                                                                       --- !! Si se descomenta esta línea ha de ser junto a la 156, además de comentar la siguiente
    info.appendChild(añadirTexto("div", null, "descripción", null, seleccionarPueblo())); // Añade la ciudad usando una función con un array pre-cargado ya con valores
    // info.appendChild(añadirTexto("div", null, "descripción", null, "Gargantilla del Lozoya y Pinilla de Buitrago")); // Así podríamos tener una ciudad estática para que no cambie

    

    info.appendChild(añadirTexto("div", null, "titulo", null, "Web")); // Añade el campo de web
    info.appendChild(añadirTexto("a", null, "descripción", usuarios[idUser].website, usuarios[idUser].website)); // Añade la web correspondiente - Además funciona como enlace

    //A COMPLETAR
    botonera.classList.remove("oculto");
}

// FUNCIÓN - Añade un elemento de tipo imagen (para el div info)
function añadirImagen(id, clase, src){
    let img = document.createElement("img");
    img.classList.add(clase);
    img.id = id;
    img.src = src;
    return img;
}

// FUNCIÓN - Añade un elemento de tipo texto (para el div info) / Se llama texto pero en verdad sirve para cualquier elemento
function añadirTexto(tipo, id, clase, href, contenido){
    let texto = document.createElement(tipo);
    texto.id = id;
    texto.classList.add(clase);
    texto.href = href;
    texto.innerText = contenido;
    return texto;
}

//Reiniciamos los parámetros para crear elementos.
function reiniciarParametros() {
    parametros = {tipo:"", clase:"", id:"", texto:"", src:"", href:"", value:""};
}

//Mostramos los posts en el div con id="posts"
async function showPosts() {
    zonaPosts.innerHTML = "";
    zonaAlbums.innerHTML = "";
    zonaFotos.innerHTML = "";
    
    let postsDiv = document.getElementById("posts");
    postsTodos = await getPosts();

    postsTodos.forEach(post => {
        
        let tituloPost = añadirTexto('h2', `post${post.id}`, 'titulo-post', null, post.title);
        let cuerpoPost = añadirTexto('p', null, 'cuerpo-post', null, post.body);

        postsDiv.appendChild(tituloPost);
        postsDiv.appendChild(cuerpoPost);

    });
}

//Obtenemos los posts del servidor
async function getPosts() {
    url = `https://jsonplaceholder.typicode.com/users/${idUser}/posts`;
    let posts;

    await fetch(url)
    .then(response => response.json())
    .then(data =>{
        console.log(data); 
        posts = data; 
    })
    return posts;
}

//Mostramos los albumes en el div con id="albumes" // COMPLETADO
async function showAlbums() {
    zonaFotos.innerHTML = ""; // Limpiamos las zonas
    zonaPosts.innerHTML = "";
    zonaAlbums.innerHTML = "";

    let albums = await getAlbums(); // Recupera los albumes de la función de getAlbums

    albums.forEach((album, index) => {
        let albumDiv = añadirTexto("a", index + 1, "album", "#", album.title); // Monta los albumes (los cuelga como enlaces clickables, añadiendo un eventListener para mostrar las fotos)
        albumDiv.addEventListener("click", showFotos);
        zonaAlbums.appendChild(albumDiv);
    });
}

//Obtenemos los albumes del servidor // COMPLETADO
async function getAlbums() {
    url = `https://jsonplaceholder.typicode.com/users/${idUser}/albums`;
 
    await fetch(url)
    .then(response=>response.json())
    .then(data=>{
        albums = data;  // Recoge los diferentes albumes
        console.log(albums);
    });
    return albums;
}

//Mostramos las fotos en el div id="fotos" // COMPLETADO
async function showFotos() {
    zonaFotos.innerHTML = ""; // Limpiamos la zona
    getFotos(this.id); // Obtenemos las fotos del album según el ID
}

//Obtenemos las fotos del servidor
async function getFotos(idAlbum) {
    url = `https://jsonplaceholder.typicode.com/albums/${idAlbum}/photos`;

    await fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            data.forEach(foto => {  // Por cada foto, usa la función de añadir imagen y las cuelga del div de zonaFotos
                let imagen = añadirImagen("foto", null, foto.thumbnailUrl);
                zonaFotos.appendChild(imagen);
            });
        });
}

// Funciones Adicionales:

// FUNCIÓN - Escoge un pueblo al azar para el perfil
function seleccionarPueblo() {  
    var random = Math.floor(Math.random() * arrayPueblos.length);
    return arrayPueblos[random];
}

// FUNCIÓN - Escoge una edad al azar para el perfil, con valores comprendidos entre 18 y 80
function seleccionarEdad() {
    var edadAleatoria = Math.floor(Math.random() * (80 - 18 + 1)) + 18;
    return edadAleatoria;
}