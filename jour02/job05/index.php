<?php
class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche = false; 

    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function getKilometrage() {
        return $this->kilometrage;
    }

    public function getEnMarche() {
        return $this->en_marche;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function demarrer() {
        if (!$this->en_marche) {
            $this->en_marche = true;
            echo "La voiture démarre.\n";
        } else {
            echo "La voiture est déjà en marche.\n";
        }
    }

    public function arreter() {
        if ($this->en_marche) {
            $this->en_marche = false;
            echo "La voiture s'arrête.\n";
        } else {
            echo "La voiture est déjà arrêtée.\n";
        }
    }
}

$voiture1 = new Voiture("Toyota", "Corolla", 2020, 50000);

echo "Marque: " . $voiture1->getMarque() . "\n";
echo "Modèle: " . $voiture1->getModele() . "\n";
echo "Année: " . $voiture1->getAnnee() . "\n";
echo "Kilométrage: " . $voiture1->getKilometrage() . " km\n";
echo "En marche: " . ($voiture1->getEnMarche() ? "Oui" : "Non") . "\n";

$voiture1->demarrer();
$voiture1->arreter();
?>
