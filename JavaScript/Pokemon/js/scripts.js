let totalCartas = 10;
let poke;
let maquinita = [];
let jugadorcete = [];
window.onload = () => {
    iniciar();
    cargarPokemons();
}
function iniciar(){
    cartel.classList.add("ocultar");
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
            if (i % 2 == 0) {
                jugadorcete.push(await cargarPokemon(poke[pos].url));
            } else {
                maquinita.push(await cargarPokemon(poke[pos].url));
            }
            i++;
        }
    }
    for(carta of jugadorcete){
        player.appendChild(crearCartas(carta[0],carta[1],carta[2]),false);
        
    }
    for(carta of maquinita){
        let card=crearCartas(carta[0],carta[1],carta[2],true);
        machine.appendChild(card);
        
    }
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

function repartirCartas(){
    
}

function crearCartas(exp,nombre,imagen,maq){
    let carta=document.createElement("div");
    carta.classList.add("carta");

    let img=document.createElement("img");
    img.src=imagen;

    let name=document.createElement("div");
    name.innerText=nombre;

    let expe=document.createElement("div");
    expe.classList.add("experiencia");
    expe.innerText=exp;

    carta.appendChild(img);
    carta.appendChild(name);
    carta.appendChild(expe);

    if(maq){
        let dorso=document.createElement("img");
        dorso.src="./img/dorso.png";
        dorso.classList.add("dorso");
        carta.appendChild(dorso);
    }

    return carta;
}