<?php
class Rectangle {
    private float $longueur;
    private float $largeur;

    public function __construct(float $longueur, float $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur(): float {
        return $this->longueur;
    }

    public function setLongueur(float $longueur) {
        if ($longueur > 0) {
            $this->longueur = $longueur;
        } else {
            echo "Erreur : La longueur doit être positive.\n";
        }
    }

    public function getLargeur(): float {
        return $this->largeur;
    }

    public function setLargeur(float $largeur) {
        if ($largeur > 0) {
            $this->largeur = $largeur;
        } else {
            echo "Erreur : La largeur doit être positive.\n";
        }
    }

    public function afficher() {
        echo "Rectangle - Longueur: " . $this->longueur . " | Largeur: " . $this->largeur . "\n";
    }
}

$rect = new Rectangle(10, 5);
$rect->afficher();

$rect->setLongueur(15);
$rect->setLargeur(7);

$rect->afficher();
?>
