<?php

include_once 'Dipendente.php';
include_once 'Persona.php';

$persona1 = new Persona( 'Pluto', 'Bianchi', 'cane', "Milano", 10);
echo "<pre>";
var_dump($persona1);
echo "</pre>";

echo "<br>";


$dipendente1 = new Dipendente("Mario","Rossi", "uomo","Padova", 28, 1111);
echo "<pre>";
var_dump($dipendente1);
echo "</pre>";
try {
    $stipendio = $dipendente1->calcolaStipendio(8);
    echo "<br>";
    echo "Lo stipendio mensile è: " . $stipendio . " euro";
} catch (\Exception $e) {
    echo "Si è verificato un errore: " . $e->getmessage();
}

echo "<br>";

$dipendente2 = new Dipendente("Luigi","Verdi", "uomo","Roma", 26, 1112);
$dipendente2->oreLavoroMensili = 140;
echo "<pre>";
var_dump($dipendente2);
echo "</pre>";
try {
    $stipendio = $dipendente2->calcolaStipendio(9);
    echo "<br>";
    echo "Lo stipendio mensile è: " . $stipendio . " euro";
} catch (\Exception $e) {
    echo "Si è verificato un errore: " . $e->getmessage();
}


echo "<br>";

$dipendente3 = new Dipendente("Anna","Bianchi", "donna","Torino", 27, 1113);
$dipendente3->luogoDiNascita = "Bologna";
echo "<pre>";
var_dump($dipendente3);
echo "</pre>";

 ?>
