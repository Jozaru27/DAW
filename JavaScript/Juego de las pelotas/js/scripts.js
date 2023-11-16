//Variables para la seleccion por parte de la maquina, del color a eliminar
let colores = ["rojo", "verde", "azul"];
let color;

//Cronometro
let horas = 0;
let minutos = 0;
let segundos = 0;
let intervalo;

//Elementos HTML
let cronometro;
let tablero;
let jugar;
let queEliminar;

//Dimensiones de la pantalla, para establecer donde tienen que crearse las pelotas
let anchoPantalla;
let altoPantalla;

//Selector de numero de pelotas por partida
let numeroPelotas = 100;

//Modos de juego
let modoTodas = false;
let modoUna = false;

let cuentaPelotas = 0;

//Modo eliminar un color
let fallos = 0;
let aciertos = 0;


window.onload = function(){

    //Resolucion pantalla
    anchoPantalla = screen.width;
    altoPantalla = screen.height;

    //tablero de juego
    tablero = document.getElementById("tablero");
    //Cronometro
    cronometro = document.getElementById("hms");
    //Boton jugar
    jugar = document.getElementById("jugar");
    //Modo de juego
    queEliminar = document.getElementById("queEliminar");

    jugar.addEventListener("click", comenzar);
    cronometro.innerText="00:00:00"

    botonesFormulario();
}

//Funcion para el funcionamiento de los botones de modo
function botonesFormulario() {
    let botones = document.getElementById("queEliminar").getElementsByTagName("div");
    for(let i = 0 ; i < botones.length; i++) {
        botones[i].addEventListener("click", seleccionar);
    }
}

//Funcion para colorear los botones de modo
function seleccionar() {
    let botones = document.getElementById("queEliminar").getElementsByTagName("div");
    for(let i = 0 ; i < botones.length; i++) {
        botones[i].classList.toggle("seleccionado");
    }
}

//Funcion que genera el color a eliminar
function avisoColor() {
    let numero = aleatorio(2);
    console.log("posicion: " + numero);
    color = colores[numero];
    let texto = document.createTextNode("Tienes que eliminar las pelotas de color:");
    let pelota = document.createElement("div");
    let boton = document.createElement("button");
    let modo = document.getElementById("modo");
    boton.innerText = "Jugar";
    boton.addEventListener("click", generarPelotas);
    pelota.className = "selectorColor " + color;
    modo.innerHTML = "";
    modo.appendChild(texto);
    modo.appendChild(pelota);
    modo.appendChild(boton);
}

/*************************************CODIGO A COMPLETAR****************************************/
function comenzar() {
    /**Seleccionamos el numero de pelotas.
    Comprobamos el modo de juego y, o bien vamos a avisoColor() que nos genera un color que eliminar, o bien vamos
    directamente a generarPelotas()**/
    numeroPelotas = document.getElementById("cantidad").value;
    modoTodas = document.getElementById("modoTodas").classList.contains("seleccionado");
    modoUna = document.getElementById("modoUna").classList.contains("seleccionado");

    if (modoTodas) {
        generarPelotas();
    } else if (modoUna) {
        avisoColor();
    }
}



//Funion que genera el numero de pelotas seleccionado
function generarPelotas() {

    /**En funcion del modo de juego, crearemos todas con color aleatorio, o el 50% del color indicado, y el resto de
    forma aleatoria.
    Las pelotas deben tener unas dimensiones entre 10px y 200px de lado, y deben aparecer dentro de las dimensiones
    del tablero.
    Comienza a andar el cronometro**/
    tablero.innerHTML = "";

    aciertos = 0;
    fallos = 0;
    colorObjetivo = color;

    let pelota;

    if (modoTodas) {
        for (let i = 0; i < numeroPelotas; i++) {
            pelota = crearPelota("aleatorio");
            tablero.appendChild(pelota);
        }

    } else {
        for (let j = 0; j < numeroPelotas/2; j++) {

            pelota = crearPelota("aleatorio");
            tablero.appendChild(pelota);
        }

        for (let i= 0; i < numeroPelotas/2; i++) {
            pelota = crearPelota(colorObjetivo);
            tablero.appendChild(pelota);
        }

    }


    cronometrar();
}

//Funcion que crea cada pelota con los parametros ancho, alto y posicion de forma aletoria y la devuelve.
function crearPelota(pelotaColor) {

    console.log(pelotaColor);
    let pelota = document.createElement("div");

    let lado = aleatorio(190) + 10;
    let posX = aleatorio(anchoPantalla - lado);
    let posY = aleatorio(altoPantalla - lado);

    pelota.className = "pelota ";
    pelota.style.width = lado + "px";
    pelota.style.height = lado + "px";
    pelota.style.left = posX + "px";
    pelota.style.top = posY + "px";

    if(pelotaColor == "aleatorio" && pelotaColor !== "red" && pelotaColor !== "green" && pelotaColor !== "blue") {
        color = "#" + Math.floor(Math.random()*16777215).toString(16);
        pelota.style.backgroundColor = color;
    } else pelota.classList.add(colorObjetivo);



    pelota.addEventListener("click", function() {
        eliminarPelota(pelota);
    });

    return pelota;
}


function eliminarPelota(pelota) {
    //Eliminamos la pelota
    //Sumamos aciertos en funcion del modo
    pelota.classList.add("ocultar");

    if (modoUna) puntosModoUna(pelota)
    else puntosModoTodas(pelota);

    
}

function puntosModoUna(pelota){
    if (pelota.classList.length == 3) {
        aciertos++
        cuentaPelotas++

    } else {
        fallos++
        cuentaPelotas++
    }
    console.log("aciertos", aciertos, "numPelotas/2", numeroPelotas/2, "fallos", fallos, "length class", pelota.classList.length);

    if (aciertos == numeroPelotas/2) {
        finPartida();
        document.getElementById("aciertos").innerText = aciertos;
        document.getElementById("fallos").innerText = fallos;

    }
}

function puntosModoTodas(pelota) {
    cuentaPelotas++;
    if (cuentaPelotas == numeroPelotas) {
        finPartida();
    }
}

//Funcion que convierte a segundos en funcion de lo que indiquen las variables horas, minutos y segundos.
function convertirASegundos() {
    let partesTiempo = cronometro.innerText.split(":");
    segundos = Math.floor(partesTiempo[0] * 60 * 60 + partesTiempo[1] * 60 + partesTiempo[2]);

    return segundos;
}

/*********************************************FIN CODIGO A COMPLETAR**************************/

function finPartida() {
    parar();
    let mensajeFinal;
    if(modoUna) mensajeFinal = "Has eliminado " + cuentaPelotas + " pelotas, " + aciertos + " de color " + colorObjetivo + ", en " + convertirASegundos() + " segundos";
    else mensajeFinal = "Has eliminado " + cuentaPelotas + " pelotas, en " + convertirASegundos() + " segundos";
    tablero.innerHTML = mensajeFinal;
}

function aleatorio(max,min) {
    if (min) return Math.round(Math.random() * (max - min) + min);
    else return Math.round(Math.random() * max);
}

/**********************CRONOMETRO***************************/
//Comienza a cronometrar
function cronometrar(){
    crearReloj();
    intervalo = setInterval(crearReloj,1000);
}

function crearReloj(){
    let hAux, mAux, sAux;
    segundos++;
    if (segundos>59) {
        minutos++;
        segundos=0;
    }
    if (minutos>59) {
        horas++;
        minutos=0;
    }
    if (horas>24) horas=0;

    if (segundos<10) sAux="0"+segundos;
    else sAux=segundos;
    if (minutos<10) mAux="0"+minutos;
    else mAux=minutos;
    if (horas<10) hAux="0"+horas;
    else hAux=horas;

    cronometro.innerText = hAux + ":" + mAux + ":" + sAux;
}
//Detiene el cronometro
function parar(){
    clearInterval(intervalo);
}