<?php

function validarCampoTexto($valor){
    //Valida que se haya introducido un text válida
    if (!trim($valor) == '') {
        return false;
            } else {
        return true;
    }

    if (!ctype_alnum($valor)) {
        return false;
            } else {
        return true;
    }
}

?>