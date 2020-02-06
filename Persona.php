<?php

class Persona {
    public $nome;
    public $cognome;
    public $genere;
    public $eta;
    public $luogoDiNascita;

    public function __construct($_nome, $_cognome, $_genere, $_luogoDiNascita = NULL, $_eta){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->genere = $_genere;
        $this->eta = $_eta;
        $this->luogoDiNascita = $_luogoDiNascita;
    }

}
 ?>
