let url;

window.onload = () => {

    var registroButton = document.getElementById("registroButton");
    var loginButton = document.getElementById("loginButton");
    var formRegistro = document.getElementById("formRegistro");
    var formLogin = document.getElementById("formLogin");

    // Ocultar
    formRegistro.style.display = "none";
    formLogin.style.display = "none";

    // Event listener en el botón de registro
    registroButton.addEventListener("click", function () {
        // Muestra el formulario de registro y el botón
        formRegistro.style.display = "block";
        // Oculta el formulario de login
        formLogin.style.display = "none";
    });

    // Event listener en el botón de login
    loginButton.addEventListener("click", function () {
        // Muestra el formulario de login y el botón
        formLogin.style.display = "block";
        // Oculta el formulario de registro
        formRegistro.style.display = "none";
    });

    botonEnviarReg.addEventListener("click", enviarForm);
    botonEnviarLog.addEventListener("click", enviarForm);
};

function enviarForm(url){
    url = this.parentNode.action;
    // fetch(url).then(datos => datos.text()).then(info => console.log(info));
    fetch(url)
            .then(datos => datos.text())
            .then(info => console.log(info));
}