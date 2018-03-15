<?php
include "./functions/classAutoLoader.php";
spl_autoload_register("classAutoLoader");

$guepard = new Koala();
$guepard -> emetreSon();
$guepard -> seNourrir();

var_dump($guepard);


/*
$voiture1 = new Voiture(1000);


$voiture1 -> couleur = "bleue";


$voiture1 -> vitesse = 28;
$voiture1 -> masse = 1000;

if($ec = $voiture1 -> calculerEnergieCinetique()) {
    $ec = $ec . " Joules";

    Log::logWrite($ec);
}*/



