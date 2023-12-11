window.onload = () => {

    var registroButton = document.getElementById("registroButton");
    var loginButton = document.getElementById("loginButton");
    var formRegistro = document.getElementById("formRegistro");
    var formLogin = document.getElementById("formLogin");
    var botonEnviar = document.getElementById("botonEnviar");

    // Ocultar
    formRegistro.style.display = "none";
    formLogin.style.display = "none";
    botonEnviar.style.display = "none";

    // Event listener en el botón de registro
    registroButton.addEventListener("click", function () {
        // Muestra el formulario de registro y el botón
        formRegistro.style.display = "block";
        botonEnviar.style.display = "block";
        // Oculta el formulario de login
        formLogin.style.display = "none";
    });

    // Event listener en el botón de login
    loginButton.addEventListener("click", function () {
        // Muestra el formulario de login y el botón
        formLogin.style.display = "block";
        botonEnviar.style.display = "block";
        // Oculta el formulario de registro
        formRegistro.style.display = "none";
    });

    function enviarForm(url){
        fetch(url);
    }
};
