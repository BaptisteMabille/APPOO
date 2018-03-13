<?php
include "./classes/Voiture.php";
include "./classes/Log.php";

$voiture1 = new Voiture();

var_dump($voiture1);

$voiture1 -> couleur = "bleue";

var_dump($voiture1);

$voiture1 -> vitesse = 28;
$voiture1 -> masse = 1000;

if($ec = $voiture1 -> calculerEnergieCinetique()) {
    $ec = $ec . " Joules";

    Log::logWrite($ec);
}

