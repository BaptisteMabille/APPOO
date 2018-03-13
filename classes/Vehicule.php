<?php
class Vehicule
{
    public $masse;
    public $vitesseInstantanee;

    public function __construct($masse)
    {
        $this -> masse = $masse;
    }

    public function calculerEnergieCinetique()
    {
        if ($this -> masse >= 0 && $this -> vitesseInstantanee >= 0) {
            return 0.5 * $this -> masse * $this -> vitesseInstantanee ** 2;
        }
        else {
            return false;
        }
    }
}