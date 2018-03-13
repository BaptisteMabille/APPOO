<?php
class Voiture
{
    public $nbrRoues;
    public $couleur;
    public $masse;
    public $carburant;
    public $vitesse;

    public function calculerEnergieCinetique()
    {
        if ($this -> masse >= 0 && $this -> vitesse >= 0) {
            return 0.5 * $this -> masse * $this -> vitesse ** 2;
        }
        else {
            return false;
        }
    }
}