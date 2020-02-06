<?php
include_once 'Persona.php';
include 'Trait.php';

class Dipendente extends Persona {
    use Common;

    public function __construct($_nome, $_cognome, $_genere ,$_luogoDiNascita = NULL, $_eta,  $_codiceIdentificativo){
        parent::__construct($_nome, $_cognome, $_genere,$_luogoDiNascita = NULL, $_eta);

        $this->codiceIdentificativo = $_codiceIdentificativo;
    }
    public function calcolaStipendio($euroOra){
        if (empty($this->oreLavoroMensili)) {
            throw new Exception('Per sapere lo stipendio devi inserire le ore di lavoro mensili!');
        }
        return $euroOra * $this->oreLavoroMensili;
    }

}
 ?>
