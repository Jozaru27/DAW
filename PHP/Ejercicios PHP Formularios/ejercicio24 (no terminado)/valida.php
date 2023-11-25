<?php

// Función que obliga a introducir datos en los campos requeridos
function validaRequerido($valor){
    if(trim($valor) == ''){
        return false;
    }else{
        return true;
    }
}

// Función que valida que se haya introducido un email
// FILTER_VALIDATE_EMAIL - Filtro de PHP
function validaEmail($valor){ 
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
        return false;
    }else{
        return true;
    }
}

// Función que valida si una cadena contiene solo caracteres alfabéticos (letras).
function validaAlfabeto ($valor){
    if (ctype_alpha($valor)===FALSE){
        return false;
    }else{
        return true;
    }
}

// Función que valida si una cadena contiene solo caracteres alfanuméricos (letras y números).
function validaAlfanum ($valor){
    if (ctype_alnum($valor)===FALSE){
        return false;
    }else{
        return true;
    }
}

// Función que valida si una cadena contiene solo caracteres numéricos.
function validaNumero ($valor){
    if (ctype_digit($valor)===FALSE){
        return false;
    }else{
        return true;
    }
}

?>