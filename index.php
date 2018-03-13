<?php
include "./functions/classAutoLoader.php";
spl_autoload_register("classAutoLoader");

$voiture1 = new Voiture(1000);

var_dump($voiture1);

$voiture1 -> couleur = "bleue";

var_dump($voiture1);

$voiture1 -> vitesse = 28;
$voiture1 -> masse = 1000;

if($ec = $voiture1 -> calculerEnergieCinetique()) {
    $ec = $ec . " Joules";

    Log::logWrite($ec);
}

