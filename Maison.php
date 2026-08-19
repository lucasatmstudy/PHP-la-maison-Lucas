<?php

class Maison {
    private string $nom;
    private int $longueur;
    private int $largeur;
    private int $nbrEtage;

    public function __construct(string $name, int $long, int $larg, int $niveau){
        $this->nom=$name;
        $this->longueur=$long;
        $this->largeur=$larg;
        $this-> nbrEtage=$niveau;
    }

    public function surfaceMaison(){
        echo "<p>La surface de " . $this->nom . " est égal à : " .$this->longueur*$this->largeur*$this->nbrEtage . " m²</p>";
    }
}