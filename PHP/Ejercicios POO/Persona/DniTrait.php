<?php
trait DniTrait {
    private function generarDNI() {
        $numero = mt_rand(10000000, 99999999);
        $letra = $this->generaLetraDNI($numero % 23);
        return $numero . $letra;
    }
    private function generaLetraDNI($idLetra) {
        $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
        return $letras[$idLetra];
    }
}
?>