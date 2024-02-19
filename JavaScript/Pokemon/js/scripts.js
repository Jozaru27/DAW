let totalCartas = 10;
let poke;
let maquinita = [];
let jugadorcete = [];
let emp;
let cont2 = 0;
let carMaq;
let j;
let expMaq;
let expJug;
/*
HACER QUE LA MAQUINA SAQUE MEJOR LAS CARTAS.
*/
window.onload = () => {
    iniciar();
    cargarPokemons();
}
function iniciar() {
    cartel.classList.add("ocultar");
}
function comenzar() {
    emp = Math.floor(Math.random() * 2);
    if (emp === 1) {
        emp = true;
        reportero.innerText = "Juega la máquina...";
        tirada();
    } else {
        emp = false;
        reportero.innerText = "Juega el jugador...";
    }
}
async function cargarPokemons() {
    let url1 = "https://pokeapi.co/api/v2/pokemon";
    let url2;
    let cont;
    await fetch(url1).then(data => data.json()).then(info => {
        cont = info.count;
        url2 = "https://pokeapi.co/api/v2/pokemon/?limit=" + cont;
    });
    await fetch(url2).then(data => data.json()).then(info => {
        poke = info.results;
    });
    let pokeSele = [];
    let i = 0;
    while (i < totalCartas) {
        let pos = Math.floor(Math.random() * cont);
        if (pokeSele[pos] != "x") {
            pokeSele[pos] = "x";
            let cartita = await cargarPokemon(poke[pos].url);
            if (cartita[0] && cartita[1] && cartita[2]) {
                if (i % 2 == 0) {
                    jugadorcete.push(await cargarPokemon(poke[pos].url));
                } else {
                    maquinita.push(await cargarPokemon(poke[pos].url));
                }
                i++;
            }
        }
    }
    maquinita.sort((a, b) => a[0] - b[0]);
    for (carta of jugadorcete) {
        player.appendChild(crearCartas(carta[0], carta[1], carta[2]), false);

    }
    for (carta of maquinita) {
        machine.appendChild(crearCartas(carta[0], carta[1], carta[2], true));
    }
    comenzar();
}
async function cargarPokemon(url) {
    let pokes = [];
    await fetch(url).then(data => data.json()).then(info => {
        pokes.push(info.base_experience);
        pokes.push(info.name);
        pokes.push(info.sprites.other["official-artwork"].front_default);
    });
    return pokes;
}
function crearCartas(exp, nombre, imagen, maq) {
    let carta = document.createElement("div");
    carta.classList.add("carta");
    let img = document.createElement("img");
    img.src = imagen;
    let name = document.createElement("div");
    name.innerText = nombre;
    let expe = document.createElement("div");
    expe.classList.add("experiencia");
    expe.innerText = exp;
    carta.appendChild(img);
    carta.appendChild(name);
    carta.appendChild(expe);
    if (maq) {
        let dorso = document.createElement("img");
        // dorso.src = "./img/dorso.png";
        // dorso.classList.add("dorso");
        carta.appendChild(dorso);
    } else {
        carta.addEventListener("dblclick", tirada);
    }
    return carta;
}
function tirada() {
    let rand = Math.floor((Math.random() * maquinita.length));
    // let c = machine.getElementsByClassName("carta")[rand];
    if (emp) {
        let c = maquinaPiensa();
        reportero.innerText = "Juega la máquina...";
        setTimeout(() => {
            // c.querySelector("img.dorso").remove();
            jugadaMachine.appendChild(c);
            reportero.innerText = "Juega el jugador...";
        }, 1000);
        emp = false;
        // maquinita.length--;
        carMaq = c;
        expMaq = parseInt(c.getElementsByClassName("experiencia")[0].innerText);
        if (isNaN(expMaq)) {
            expMaq = 0;
        }
        cont2++;
    } else {
        j = this;
        j.removeEventListener("dblclick", tirada);
        jugadaPlayer.appendChild(j);
        emp = true;
        expJug = parseInt(j.getElementsByClassName("experiencia")[0].innerText);
        if (isNaN(expJug)) {
            expJug = 0;
        }
        cont2++
    }
    setTimeout(jugar, 2000);
}
function maquinaPiensa() {
    let cartota;
    if (play.querySelectorAll(".carta").length != 1) {
        let rand = Math.floor((Math.random() * maquinita.length));
        cartota = machine.getElementsByClassName("carta")[rand];
    } else {
        let maquinon=machine.querySelectorAll(".carta");
        let i = 0;
        while (!cartota || i < maquinon.length) {
            if(expJug == parseInt(maquinon[i].querySelector(".experiencia").innerText)){
                if((parseInt(maquinon[i].querySelector(".experiencia").innerText)+parseInt(totalMachine.innerText))>=1000){
                    cartota=maquinon[i];
                }
            }
            else if (expJug < parseInt(maquinon[i].querySelector(".experiencia").innerText)) {
                cartota = maquinon[i];
            }
            i++;
        }
        if(!cartota){
            cartota=maquinon[0];
        }
    }
    return cartota;
}
function jugar() {
    if (cont2 == 2) {
        cont2 = 0;
        if (expJug < expMaq) {
            cartasMachine.appendChild(j);
            cartasMachine.appendChild(carMaq);
            totalMachine.innerText = parseInt(totalMachine.innerText) + expMaq + expJug;
            emp = true;
        } else if (expJug > expMaq) {
            cartasPlayer.appendChild(j);
            cartasPlayer.appendChild(carMaq);
            totalPlayer.innerText = parseInt(totalPlayer.innerText) + expJug + expMaq;
            emp = false;
        } else if (expJug == expMaq) {
            cartasPlayer.appendChild(j);
            cartasMachine.appendChild(carMaq);
            totalPlayer.innerText = parseInt(totalPlayer.innerText) + expJug;
            totalMachine.innerText = parseInt(totalMachine.innerText) + expMaq;
            emp = false;
        }
    }
    if (player.querySelectorAll(".carta").length == 0 && machine.querySelectorAll(".carta").length == 0 || parseInt(totalPlayer.innerText) >= 1000 || parseInt(totalMachine.innerText) >= 1000) {
        final();
        emp = "h";
    } else if (emp) {
        tirada();
    }
}
function final() {
    cartel.classList.remove("ocultar");
    let p = parseInt(totalPlayer.innerText);
    let m = parseInt(totalMachine.innerText);
    if (p > m) {
        cartel.innerText = "Ha ganado el jugador";
    } else if (m > p) {
        cartel.innerText = "Ha ganado la máquina";
        cartel.appendChild(botoncito());
    } else {
        cartel.innerText = "Empate";
    }
}
function botoncito() {
    let b = document.createElement("button");
    b.classList.add("cartel");
    b.innerText = "Reiniciar juego";
    b.addEventListener("click", () => {
        location.reload();
    });
    return b;
}