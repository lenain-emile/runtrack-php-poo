<?php

class Animal {
    private $age;
    private $prenom;

    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    public function getAge() {
        return "L'âge de l'animal est : " . $this->age . " ans";
    }

    public function vieillir() {
        $this->age += 1;
    }

    public function nommer($nom) {
        $this->prenom = $nom;
    }

    public function getNom() {
        return "Le nom de l'animal est : " . $this->prenom;
    }
}

$animal = new Animal();

echo $animal->getAge() . "<br>";


$animal->vieillir();
echo $animal->getAge() . "<br>";

$animal->nommer("Luna");
echo $animal->getNom() . "<br>";

?>
